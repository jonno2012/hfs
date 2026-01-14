<?php

declare(strict_types=1);

namespace App\Messaging;

interface RabbitMqPublisherInterface
{
    /**
     * Publish a message to RabbitMQ.
     *
     * @param string $routingKey The routing key (event name, e.g. "article.created")
     * @param array<string, mixed> $payload The message payload
     * @return array{success: bool, error: string} Success status and error message (empty if successful)
     */
    public function publish(string $routingKey, array $payload): array;
}
