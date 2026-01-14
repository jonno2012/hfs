<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Messaging\RabbitMqPublisherInterface;
use App\Models\OutboxEvent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class OutboxReplayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'outbox:replay {--limit=100 : Maximum number of events to process}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Replay unpublished events from the outbox';

    public function __construct(
        private readonly RabbitMqPublisherInterface $publisher,
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $limit = (int) $this->option('limit');

        $this->info("Starting outbox replay (limit: {$limit})...");

        $events = OutboxEvent::whereNull('published_at')
            ->orderBy('created_at', 'asc')
            ->limit($limit)
            ->get();

        if ($events->isEmpty()) {
            $this->info('No unpublished events found.');
            return Command::SUCCESS;
        }

        $this->info("Found {$events->count()} unpublished event(s).");

        $successCount = 0;
        $failureCount = 0;

        foreach ($events as $event) {
            $payload = json_decode($event->payload, true);

            if ($payload === null) {
                $this->warn("Skipping event {$event->id}: Invalid JSON payload");
                $event->increment('attempts');
                $event->update(['last_error' => 'Invalid JSON payload']);
                $failureCount++;
                continue;
            }

            $result = $this->publisher->publish($event->routing_key, $payload);

            if ($result['success']) {
                $event->update([
                    'published_at' => now(),
                    'last_error' => null,
                ]);
                $successCount++;
                $this->line("✓ Published event {$event->id} ({$event->event_name})");
            } else {
                $event->increment('attempts');
                $event->update(['last_error' => $result['error']]);
                $failureCount++;
                $this->error("✗ Failed to publish event {$event->id} ({$event->event_name}): {$result['error']}");
            }
        }

        $summary = [
            'total' => $events->count(),
            'success' => $successCount,
            'failed' => $failureCount,
        ];

        $this->newLine();
        $this->info('Summary:');
        $this->line("  Total processed: {$summary['total']}");
        $this->line("  Successful: {$summary['success']}");
        $this->line("  Failed: {$summary['failed']}");

        Log::info('Outbox replay completed', $summary);

        return Command::SUCCESS;
    }
}
