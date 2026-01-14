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

# For powershell

Invoke-RestMethod -Uri http://localhost:8081/api/articles -Method POST -ContentType "application/json" -Body '{"title": "My First Article", "body": "This is the article body content.", "status": "draft"}'

# For bash

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

# Powershell
Invoke-RestMethod -Uri http://localhost:8081/api/articles/{article-id} -Method PUT -ContentType "application/json" -Body '{"title": "Updated Article Title", "body": "Updated article body content.", "status": "published"}'

# For bash

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
- **URL**: http://localhost:15672
- **Username**: `guest`
- **Password**: `guest`

### Key Features

**Queues Tab:**
- View all queues and their status
- Monitor message counts (Ready, Unacked, Total)
- Inspect individual messages
- View message rates and throughput
- Check consumer connections

**Exchanges Tab:**
- View all exchanges (including `articles.events`)
- See message publish rates
- Check bindings to queues

**Connections Tab:**
- Monitor active connections
- See which services are connected

### Common Tasks

**View Messages in Queue:**
1. Go to **Queues** tab
2. Click on `indexer.articles`
3. Scroll to "Get messages" section
4. Click "Get message(s)" to retrieve and inspect message payloads

**Monitor Queue Status:**
- **Ready**: Messages waiting to be consumed
- **Unacked**: Messages being processed (not yet acknowledged)
- **Total**: Total messages that have entered the queue

**Check Exchange Bindings:**
1. Go to **Exchanges** tab
2. Click on `articles.events`
3. View "Bindings" section to see which queues receive messages from this exchange

## Testing Consumer Idempotency

Test that the consumer correctly handles duplicate events using the unique constraint on `processed_events.event_id`.

### Prerequisites

Before running the test, ensure:
1. Docker containers are running: `docker compose up -d`
2. Migrations have been run for the indexer service:
   ```bash
   docker compose exec indexer-service php artisan migrate
   ```
3. RabbitMQ is accessible (check http://localhost:15672)

### Step-by-Step Test Process

**IMPORTANT:** The consumer must NOT be running before you publish test messages. The consumer will automatically consume messages as they arrive, so you need to manually start it only after publishing.

#### Step 1: Ensure Consumer is NOT Running

Before publishing test messages, verify the consumer is not running:

```bash
# Check if a consumer process is running
docker compose exec indexer-service ps aux | grep consume
```

If you see a consumer process, stop and restart the container to ensure it's stopped:

```bash
docker compose stop indexer-service
docker compose up -d indexer-service
```

The `indexer-service` container is configured to run `sleep infinity` by default, so the consumer will NOT start automatically. This allows messages to accumulate in the queue for testing.

#### Step 2: Publish Duplicate Events Using test-publish.php

Use the `test-publish.php` script to publish 3 identical events with the same `event_id`:

```bash
# Copy script to container
docker compose cp test-publish.php indexer-service:/tmp/test-publish.php

# Run it
docker compose exec indexer-service php /tmp/test-publish.php

# Clean up
docker compose exec indexer-service rm /tmp/test-publish.php
```

The script will:
- Publish **3 identical events** with the same `event_id` to RabbitMQ
- Display the `event_id` and `article_id` for reference
- Show the final queue count

**Expected output:**
```
Published message 1/3 (event_id: test-...)
Published message 2/3 (event_id: test-...)
Published message 3/3 (event_id: test-...)
Queue 'indexer.articles' now has 3 message(s), 0 consumer(s)
```

#### Step 3: Verify Messages in RabbitMQ Management Console

Before starting the consumer, verify the messages are in the queue:

1. Open http://localhost:15672 in your browser
2. Login with:
   - Username: `guest`
   - Password: `guest`
3. Navigate to **Queues** in the top menu
4. Click on the **`indexer.articles`** queue
5. You should see:
   - **Ready**: 3 messages (waiting to be consumed)
   - **Total**: 3 messages
6. To inspect a message:
   - Scroll down to the "Get messages" section
   - Click "Get message(s)" to see the message payload
   - Verify the `event_id` is the same in all messages

**Expected state:** 3 messages in the queue, all with identical `event_id`

#### Step 4: Manually Start the Consumer

Now start the consumer to process the 3 messages:

```bash
docker compose exec indexer-service php artisan rabbitmq:consume-articles --max=3
```

**What to watch for in the output:**
- First message: Should show "Processed successfully"
- Second and third messages: Should show "Already processed (event_id: ...)" - this confirms idempotency!

The consumer will process all 3 messages and then exit (due to `--max=3`).

#### Step 5: Verify Idempotency in Database

After the consumer completes, verify only one record was created:

```bash
docker compose exec indexer-service php artisan tinker
```

Then in tinker:

```php
// Get the event_id from the test-publish.php output and use it here
$eventId = 'test-...'; // Replace with actual event_id from script output

// Check processed_events table
App\Models\ProcessedEvent::where('event_id', $eventId)->count()
// Should return: 1

// Check indexed_articles table  
App\Models\IndexedArticle::where('article_id', 'test-article-...')->count()
// Should return: 1 (use the article_id from script output)
```

**Test PASSES if:**
- ✅ Only 1 `ProcessedEvent` record exists (despite 3 messages)
- ✅ Only 1 `IndexedArticle` record exists
- ✅ Article title is "Idempotency Test Article"

**What this proves:**
- The unique constraint on `processed_events.event_id` successfully prevents duplicate processing
- The consumer correctly handles duplicate events without errors
- Even when RabbitMQ delivers the same event multiple times, only one record is created

#### Step 6: Verify Queue is Empty

After processing, check the RabbitMQ Management Console again:

1. Go to **Queues** > `indexer.articles`
2. **Ready** should be 0 (all messages processed)
3. **Total** shows how many messages were processed (should be 3)

### Troubleshooting

**Issue: No messages appear in RabbitMQ Management UI**

**First, check if a consumer is running:**
```bash
docker compose exec indexer-service ps aux | grep consume
```

If you see a consumer process, stop and restart the container:
```bash
docker compose stop indexer-service
docker compose up -d indexer-service
```

The consumer should NOT be running automatically - messages need to stay in the queue for testing.

**Issue: Consumer processes messages but test fails**
- Check database connection: `docker compose exec indexer-service php artisan migrate:status`
- Verify migrations ran: `docker compose exec indexer-service php artisan migrate`

**Issue: Messages remain in queue after consumer runs**
- Check consumer logs for errors
- Verify the consumer acknowledged messages (should see "Processed successfully" or "Already processed")
- Manually check queue in RabbitMQ Management UI

**Issue: Deprecation warnings from test-publish.php**
- The deprecation warnings from `php-amqplib` are harmless and won't prevent messages from being published
- They're due to PHP 8.3 compatibility issues in the library
- You can ignore them - messages will still be published successfully

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
