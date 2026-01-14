<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\IndexedArticle;
use App\Models\ProcessedEvent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPExceptionInterface;
use PhpAmqpLib\Message\AMQPMessage;

class ConsumeArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:consume-articles {--once : Process only one message} {--max=0 : Maximum number of messages to process (0 = unlimited)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Consume article events from RabbitMQ';

    private ?AMQPStreamConnection $connection = null;
    private int $processedCount = 0;
    private int $maxMessages;

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->maxMessages = (int) $this->option('max');
        $processOnce = $this->option('once');

        $host = env('RABBITMQ_HOST', 'localhost');
        $port = (int) env('RABBITMQ_PORT', 5672);
        $user = env('RABBITMQ_USER', 'guest');
        $password = env('RABBITMQ_PASSWORD', 'guest');
        $vhost = env('RABBITMQ_VHOST', '/');
        $queue = env('RABBITMQ_QUEUE', 'indexer.articles');

        try {
            $this->connection = new AMQPStreamConnection($host, $port, $user, $password, $vhost);
            $channel = $this->connection->channel();

            // Declare queue (durable)
            $channel->queue_declare($queue, false, true, false, false);

            $this->info("Consuming messages from queue: {$queue}");
            if ($processOnce) {
                $this->info('Processing one message only');
            }
            if ($this->maxMessages > 0) {
                $this->info("Maximum messages to process: {$this->maxMessages}");
            }

            $callback = function (AMQPMessage $message) use ($channel, $queue) {
                $this->processMessage($message, $channel, $queue);
            };

            $channel->basic_qos(null, 1, null); // Fair dispatch
            $channel->basic_consume($queue, '', false, false, false, false, $callback);

            while ($channel->is_consuming()) {
                if ($processOnce && $this->processedCount > 0) {
                    break;
                }
                if ($this->maxMessages > 0 && $this->processedCount >= $this->maxMessages) {
                    break;
                }
                $channel->wait();
            }

            $channel->close();
            $this->closeConnection();

            $this->info("Processed {$this->processedCount} message(s)");

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Error consuming messages: ' . $e->getMessage());
            Log::error('RabbitMQ consumer error', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            $this->closeConnection();

            return Command::FAILURE;
        }
    }

    /**
     * Process a single message.
     */
    private function processMessage(AMQPMessage $message, $channel, string $queue): void
    {
        $deliveryTag = $message->getDeliveryTag();
        $body = $message->getBody();

        try {
            // Parse JSON
            $data = json_decode($body, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                $error = 'Invalid JSON: ' . json_last_error_msg();
                $this->error("Message {$deliveryTag}: {$error}");
                Log::warning('Invalid JSON in RabbitMQ message', ['error' => $error, 'body' => $body]);
                $channel->basic_reject($deliveryTag, false); // No requeue
                return;
            }

            // Validate required fields
            $validationError = $this->validateEvent($data);
            if ($validationError !== null) {
                $this->error("Message {$deliveryTag}: Validation failed - {$validationError}");
                Log::warning('Event validation failed', ['error' => $validationError, 'data' => $data]);
                $channel->basic_reject($deliveryTag, false); // No requeue
                return;
            }

            // Process event
            DB::beginTransaction();

            try {
                // Idempotency check: try to insert processed_events
                try {
                    ProcessedEvent::create([
                        'event_id' => $data['event_id'],
                        'event_name' => $data['event_name'],
                        'processed_at' => now(),
                    ]);
                } catch (\Illuminate\Database\QueryException $e) {
                    // If constraint violation (already processed), commit and ack
                    if ($e->getCode() === '23000' || str_contains($e->getMessage(), 'UNIQUE constraint')) {
                        DB::commit();
                        $channel->basic_ack($deliveryTag);
                        $this->line("Message {$deliveryTag}: Already processed (event_id: {$data['event_id']})");
                        $this->processedCount++;
                        return;
                    }
                    throw $e;
                }

                // Stale protection check
                $occurredAt = \Carbon\Carbon::parse($data['occurred_at']);
                $existing = IndexedArticle::find($data['article_id']);

                if ($existing !== null && $existing->last_event_at !== null) {
                    $lastEventAt = \Carbon\Carbon::parse($existing->last_event_at);
                    if ($occurredAt->lt($lastEventAt)) {
                        // Stale event, skip processing but still record as processed
                        DB::commit();
                        $channel->basic_ack($deliveryTag);
                        $this->line("Message {$deliveryTag}: Stale event ignored (event_id: {$data['event_id']}, article_id: {$data['article_id']})");
                        $this->processedCount++;
                        return;
                    }
                }

                // Apply event
                $this->applyEvent($data, $occurredAt);

                DB::commit();
                $channel->basic_ack($deliveryTag);
                $this->line("Message {$deliveryTag}: Processed successfully (event: {$data['event_name']}, article_id: {$data['article_id']})");
                $this->processedCount++;
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } catch (\Illuminate\Database\QueryException $e) {
            // Database errors: nack with requeue
            $error = 'Database error: ' . $e->getMessage();
            $this->error("Message {$deliveryTag}: {$error}");
            Log::error('Database error processing message', ['error' => $error, 'trace' => $e->getTraceAsString()]);
            $channel->basic_nack($deliveryTag, false, true); // Requeue
        } catch (\Exception $e) {
            // Transient errors: nack with requeue
            $error = 'Error processing message: ' . $e->getMessage();
            $this->error("Message {$deliveryTag}: {$error}");
            Log::error('Error processing message', ['error' => $error, 'trace' => $e->getTraceAsString()]);
            $channel->basic_nack($deliveryTag, false, true); // Requeue
        }
    }

    /**
     * Validate event data.
     *
     * @param array<string, mixed> $data
     * @return string|null Error message if invalid, null if valid
     */
    private function validateEvent(array $data): ?string
    {
        $required = ['version', 'event_id', 'event_name', 'occurred_at', 'article_id'];
        foreach ($required as $field) {
            if (!isset($data[$field])) {
                return "Missing required field: {$field}";
            }
        }

        // Validate event_name
        $validEvents = ['article.created', 'article.updated', 'article.deleted'];
        if (!in_array($data['event_name'], $validEvents, true)) {
            return "Invalid event_name: {$data['event_name']}";
        }

        // Validate occurred_at format
        try {
            \Carbon\Carbon::parse($data['occurred_at']);
        } catch (\Exception $e) {
            return "Invalid occurred_at format: {$data['occurred_at']}";
        }

        return null;
    }

    /**
     * Apply event to indexed_articles.
     *
     * @param array<string, mixed> $data
     */
    private function applyEvent(array $data, \Carbon\Carbon $occurredAt): void
    {
        $eventName = $data['event_name'];
        $articleId = $data['article_id'];

        if ($eventName === 'article.deleted') {
            IndexedArticle::where('article_id', $articleId)->delete();
        } else {
            // created or updated: upsert
            $articleData = $data['article'] ?? null;
            if ($articleData === null) {
                throw new \RuntimeException("Missing article data for event: {$eventName}");
            }

            IndexedArticle::updateOrCreate(
                ['article_id' => $articleId],
                [
                    'title' => $articleData['title'] ?? null,
                    'body' => $articleData['body'] ?? null,
                    'status' => $articleData['status'] ?? null,
                    'last_event' => $eventName,
                    'last_event_at' => $occurredAt,
                ]
            );
        }
    }

    /**
     * Close the RabbitMQ connection.
     */
    private function closeConnection(): void
    {
        if ($this->connection !== null && $this->connection->isConnected()) {
            try {
                $this->connection->close();
            } catch (\Exception $e) {
                // Ignore errors during cleanup
            }
            $this->connection = null;
        }
    }
}
