<?php

declare(strict_types=1);

namespace App\Messaging;

/**
 * Null implementation of RabbitMqPublisherInterface for testing.
 * Always returns success without actually publishing.
 */
class NullPublisher implements RabbitMqPublisherInterface
{
    /**
     * Publish a message (no-op for testing).
     *
     * @param string $routingKey The routing key (event name, e.g. "article.created")
     * @param array<string, mixed> $payload The message payload
     * @return array{success: bool, error: string} Always returns success
     */
    public function publish(string $routingKey, array $payload): array
    {
        return ['success' => true, 'error' => ''];
    }
}
