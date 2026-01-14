<?php

declare(strict_types=1);

namespace App\Services;

use App\Messaging\RabbitMqPublisherInterface;
use App\Models\Article;
use App\Models\OutboxEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ArticleEventService
{
    public function __construct(
        private readonly RabbitMqPublisherInterface $publisher,
    ) {
    }

    /**
     * Build and publish article.created event.
     */
    public function publishCreated(Article $article): void
    {
        $eventId = (string) Str::uuid();
        $occurredAt = now()->utc()->toIso8601String();
        $routingKey = 'article.created';

        $payload = [
            'version' => 'v1',
            'event_id' => $eventId,
            'event_name' => $routingKey,
            'occurred_at' => $occurredAt,
            'article_id' => $article->id,
            'article' => [
                'id' => $article->id,
                'title' => $article->title,
                'body' => $article->body,
                'status' => $article->status,
            ],
        ];

        $this->attemptPublish($eventId, $routingKey, $routingKey, $payload);
    }

    /**
     * Build and publish article.updated event.
     */
    public function publishUpdated(Article $article): void
    {
        $eventId = (string) Str::uuid();
        $occurredAt = now()->utc()->toIso8601String();
        $routingKey = 'article.updated';

        $payload = [
            'version' => 'v1',
            'event_id' => $eventId,
            'event_name' => $routingKey,
            'occurred_at' => $occurredAt,
            'article_id' => $article->id,
            'article' => [
                'id' => $article->id,
                'title' => $article->title,
                'body' => $article->body,
                'status' => $article->status,
            ],
        ];

        $this->attemptPublish($eventId, $routingKey, $routingKey, $payload);
    }

    /**
     * Build and publish article.deleted event.
     */
    public function publishDeleted(string $articleId): void
    {
        $eventId = (string) Str::uuid();
        $occurredAt = now()->utc()->toIso8601String();
        $routingKey = 'article.deleted';

        $payload = [
            'version' => 'v1',
            'event_id' => $eventId,
            'event_name' => $routingKey,
            'occurred_at' => $occurredAt,
            'article_id' => $articleId,
        ];

        $this->attemptPublish($eventId, $routingKey, $routingKey, $payload);
    }

    /**
     * Attempt to publish event, store in outbox on failure.
     *
     * @param array<string, mixed> $payload
     */
    private function attemptPublish(string $eventId, string $eventName, string $routingKey, array $payload): void
    {
        $result = $this->publisher->publish($routingKey, $payload);

        if (! $result['success']) {
            Log::warning('Failed to publish event to RabbitMQ', [
                'event_id' => $eventId,
                'event_name' => $eventName,
                'routing_key' => $routingKey,
                'error' => $result['error'],
            ]);
            $this->storeInOutbox($eventId, $eventName, $routingKey, $payload, $result['error']);
        }
    }

    /**
     * Store failed event in outbox.
     *
     * @param array<string, mixed> $payload
     */
    private function storeInOutbox(string $eventId, string $eventName, string $routingKey, array $payload, string $error): void
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
