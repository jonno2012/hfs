<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleEventService
{
    public function __construct(
        private readonly RabbitMQEventPublisher $publisher,
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
        try {
            $published = $this->publisher->publish($routingKey, $payload);

            if (! $published) {
                $error = 'Failed to publish event to RabbitMQ';
                $this->publisher->storeInOutbox($eventId, $eventName, $routingKey, $payload, $error);
            }
        } catch (\Exception $e) {
            $error = 'Exception while publishing: ' . $e->getMessage();
            $this->publisher->storeInOutbox($eventId, $eventName, $routingKey, $payload, $error);
        }
    }
}
