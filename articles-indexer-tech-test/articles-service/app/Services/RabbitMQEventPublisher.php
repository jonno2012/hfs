<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\OutboxEvent;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Exception\AMQPExceptionInterface;

class RabbitMQEventPublisher
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
     * Publish an event to RabbitMQ.
     *
     * @param array<string, mixed> $payload
     * @return bool True if published successfully, false otherwise
     */
    public function publish(string $routingKey, array $payload): bool
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

            return true;
        } catch (AMQPExceptionInterface|\JsonException|\Exception $e) {
            $this->closeConnection();

            return false;
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
            $this->connection->close();
            $this->connection = null;
        }
    }

    /**
     * Store failed event in outbox.
     *
     * @param array<string, mixed> $payload
     */
    public function storeInOutbox(string $eventId, string $eventName, string $routingKey, array $payload, string $error): void
    {
        OutboxEvent::create([
            'event_id' => $eventId,
            'event_name' => $eventName,
            'routing_key' => $routingKey,
            'payload' => json_encode($payload, JSON_THROW_ON_ERROR),
            'attempts' => 1,
            'last_error' => $error,
        ]);
    }
}
