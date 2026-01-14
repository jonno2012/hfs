<?php

declare(strict_types=1);

namespace App\Messaging;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exception\AMQPExceptionInterface;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMqPublisher
{
    private ?AMQPStreamConnection $connection = null;

    public function __construct(
        private readonly string $host,
        private readonly int $port,
        private readonly string $user,
        private readonly string $password,
        private readonly string $vhost,
        private readonly string $exchange,
    ) {
    }

    /**
     * Publish a message to RabbitMQ.
     *
     * @param string $routingKey The routing key (event name, e.g. "article.created")
     * @param array<string, mixed> $payload The message payload
     * @return array{success: bool, error: string} Success status and error message (empty if successful)
     */
    public function publish(string $routingKey, array $payload): array
    {
        try {
            $connection = $this->getConnection();
            $channel = $connection->channel();

            // Declare exchange (idempotent)
            $channel->exchange_declare(
                $this->exchange,
                'topic',
                false,
                true,
                false
            );

            $message = new AMQPMessage(
                json_encode($payload, JSON_THROW_ON_ERROR),
                ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]
            );

            $channel->basic_publish($message, $this->exchange, $routingKey);

            $channel->close();
            $this->closeConnection();

            return ['success' => true, 'error' => ''];
        } catch (AMQPExceptionInterface $e) {
            $this->closeConnection();
            return ['success' => false, 'error' => 'RabbitMQ connection error: ' . $e->getMessage()];
        } catch (\JsonException $e) {
            $this->closeConnection();
            return ['success' => false, 'error' => 'JSON encoding error: ' . $e->getMessage()];
        } catch (\Exception $e) {
            $this->closeConnection();
            return ['success' => false, 'error' => 'Unexpected error: ' . $e->getMessage()];
        }
    }

    /**
     * Get or create RabbitMQ connection.
     */
    private function getConnection(): AMQPStreamConnection
    {
        if ($this->connection === null || !$this->connection->isConnected()) {
            $this->connection = new AMQPStreamConnection(
                $this->host,
                $this->port,
                $this->user,
                $this->password,
                $this->vhost
            );
        }

        return $this->connection;
    }

    /**
     * Close the connection.
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
