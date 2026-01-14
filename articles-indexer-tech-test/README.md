# Articles Indexer Tech Test

A monorepo containing two Laravel services:
- **Articles Service**: CRUD API for articles with RabbitMQ event publishing
- **Indexer Service**: RabbitMQ consumer that processes article events

## Structure

```
articles-indexer-tech-test/
├── articles-service/     # Laravel CRUD API service
├── indexer-service/      # Laravel RabbitMQ consumer service
├── contracts/            # Event contracts and schemas
└── infra/                # Infrastructure configuration
```

## Requirements

- Docker and Docker Compose

## Setup

Start all services:

```bash
docker compose up -d --build
```

This will start:
- RabbitMQ (ports 5672, 15672)
- Articles Service (port 8081)
- Indexer Service (CLI, no HTTP port)
- RabbitMQ Management UI Monitoring 15672

RabbitMQ credentials:
Username: guest
Password: guest

## Migrations

Run migrations for both services:

```bash
# Articles Service
docker compose exec articles-service php artisan migrate

# Indexer Service
docker compose exec indexer-service php artisan migrate
```

## Run Consumer

Start the RabbitMQ consumer:

```bash
docker compose exec indexer-service php artisan rabbitmq:consume-articles
```

Options:
- `--once`: Process only one message
- `--max=N`: Process up to N messages

## Replay Outbox

Replay unpublished events from the outbox:

```bash
docker compose exec articles-service php artisan outbox:replay
```

Options:
- `--limit=N`: Process up to N events (default: 100)

## API Examples

The Articles Service API is available at `http://localhost:8081/api/articles`.

### Create Article

```bash
curl -X POST http://localhost:8081/api/articles \
  -H "Content-Type: application/json" \
  -d '{
    "title": "My First Article",
    "body": "This is the article body content.",
    "status": "draft"
  }'
```

### Update Article

```bash
curl -X PUT http://localhost:8081/api/articles/{article-id} \
  -H "Content-Type: application/json" \
  -d '{
    "title": "Updated Article Title",
    "body": "Updated article body content.",
    "status": "published"
  }'
```

### List Articles

```bash
curl http://localhost:8081/api/articles
```

### Get Single Article

```bash
curl http://localhost:8081/api/articles/{article-id}
```

### Delete Article

```bash
curl -X DELETE http://localhost:8081/api/articles/{article-id}
```

## RabbitMQ Management UI

Access the RabbitMQ Management UI at:
- URL: http://localhost:15672
- Username: `guest`
- Password: `guest`

From the UI you can:
- View queues and exchanges
- Monitor message flow
- Inspect messages in queues

## Linting & Static Analysis
# Run Pint
- docker compose exec articles-service composer lint
- docker compose exec indexer-service composer lint

# Run PHPStan (Static Analysis)
- docker compose exec articles-service composer stan
- docker compose exec indexer-service composer stan
## Trade-offs & Assumptions

### Database Choice
- **SQLite** chosen for simplicity and ease of local development
- No separate database server required
- Database files persist in `./articles-service/database/` and `./indexer-service/database/`

### Outbox Pattern
- **Minimal replay implementation**: Manual replay via `outbox:replay` command
- Not a fully automated scheduler (would require a background worker/cron)
- Failed events are stored in `outbox_events` table for manual replay

### Idempotency
- **Consumer idempotency** via database unique constraint on `processed_events.event_id`
- Duplicate event deliveries are automatically detected and skipped
- Events are recorded as processed even if they're stale or already applied

### Stale Event Protection
- **Time-based protection** via `occurred_at` vs `last_event_at` comparison
- Events with `occurred_at < last_event_at` are ignored (stale)
- Prevents older events from overwriting newer data
- Handles message reordering gracefully

### Event Delivery Guarantees
- **At-least-once delivery**: Events may be delivered multiple times
- **Not exactly-once**: No distributed transaction coordination
- **Pragmatic approach**: DB writes succeed even if RabbitMQ publish fails (stored in outbox)
- Failed publishes are stored in outbox for later replay

### Error Handling
- **Transient errors**: Messages are nacked with requeue=true
- **Poison messages**: Invalid/validation errors are rejected without requeue
- **Database errors**: Nacked with requeue for retry
