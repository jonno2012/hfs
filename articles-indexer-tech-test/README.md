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

### Step 1: Configure Environment Variables

Laravel applications require a `.env` file for configuration. While Docker Compose sets environment variables, Laravel's bootstrap process still expects a `.env` file to exist (even if empty) to prevent warnings.

**Why `.env` files are needed:**
- Laravel's bootstrap process attempts to read `.env` files during application startup
- Even though Docker Compose provides environment variables, Laravel will show warnings if `.env` files are missing
- The `.env` files are gitignored (as they should be) and won't be committed to version control
- Tests use `phpunit.xml` for configuration, but the application still expects `.env` files to exist

**Create `.env` files from `.env.example`:**

```bash
# Articles Service
cp articles-service/.env.example articles-service/.env

# Indexer Service
cp indexer-service/.env.example indexer-service/.env
```

**Or create them inside Docker containers:**

```bash
# Articles Service
docker compose exec articles-service cp .env.example .env

# Indexer Service
docker compose exec indexer-service cp .env.example .env
```

**Note:** The `.env.example` files contain all necessary environment variables with default values. The Docker Compose configuration will override these values when running in containers, but having `.env` files prevents Laravel from showing warnings during bootstrap.

### Step 2: Start Services

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

### Manual Testing: Outbox Pattern

Test the outbox pattern by simulating a RabbitMQ failure and verifying that events are stored and can be replayed.

#### Step 1: Stop RabbitMQ

Stop RabbitMQ to simulate a connection failure:

```bash
docker compose stop rabbitmq
```

#### Step 2: Trigger Events (These Will Fail to Publish)

With RabbitMQ stopped, create, update, or delete articles. The events will fail to publish and be stored in the `outbox_events` table:

**Create an article:**
```bash
# PowerShell
Invoke-RestMethod -Uri http://localhost:8081/api/articles -Method POST -ContentType "application/json" -Body '{"title": "Test Article", "body": "Test body", "status": "draft"}'

# Bash
curl -X POST http://localhost:8081/api/articles \
  -H "Content-Type: application/json" \
  -d '{"title": "Test Article", "body": "Test body", "status": "draft"}'
```

**Update an article:**
```bash
# PowerShell
Invoke-RestMethod -Uri http://localhost:8081/api/articles/{article-id} -Method PUT -ContentType "application/json" -Body '{"title": "Updated Title", "body": "Updated body", "status": "published"}'

# Bash
curl -X PUT http://localhost:8081/api/articles/{article-id} \
  -H "Content-Type: application/json" \
  -d '{"title": "Updated Title", "body": "Updated body", "status": "published"}'
```

**Delete an article:**
```bash
curl -X DELETE http://localhost:8081/api/articles/{article-id}
```

#### Step 3: Verify Events Are Stored in Outbox

Check that events were stored in the `outbox_events` table:

```bash
docker compose exec articles-service php artisan tinker
```

Then in tinker:

```php
// Check for unpublished events
\App\Models\OutboxEvent::whereNull('published_at')->count();

// View unpublished events
\App\Models\OutboxEvent::whereNull('published_at')->get(['event_name', 'routing_key', 'attempts', 'last_error']);

// Or check directly in SQLite
// docker compose exec articles-service sqlite3 database/database.sqlite "SELECT id, event_name, routing_key, published_at, attempts, last_error FROM outbox_events WHERE published_at IS NULL;"
```

**Expected result:** You should see events with `published_at = NULL`, `attempts = 1`, and `last_error` containing a RabbitMQ connection error.

#### Step 4: Restart RabbitMQ

Restart RabbitMQ so events can be published:

```bash
docker compose start rabbitmq
```

Wait a few seconds for RabbitMQ to be ready (check http://localhost:15672).

#### Step 5: Replay Outbox Events

Replay the stored events:

```bash
docker compose exec articles-service php artisan outbox:replay
```

Or replay with a limit:

```bash
docker compose exec articles-service php artisan outbox:replay --limit=10
```

**Expected output:**
```
Starting outbox replay (limit: 100)...
Found 3 unpublished event(s).
✓ Published event {id} (article.created)
✓ Published event {id} (article.updated)
✓ Published event {id} (article.deleted)

Summary:
  Total processed: 3
  Successful: 3
  Failed: 0
```

#### Step 6: Verify Events Were Published

**Check the outbox_events table:**

```bash
docker compose exec articles-service php artisan tinker
```

```php
// Check that published_at is now set
\App\Models\OutboxEvent::whereNotNull('published_at')->count();

// View all events
\App\Models\OutboxEvent::all(['id', 'event_name', 'published_at', 'attempts']);
```

**Check RabbitMQ Management Console:**

1. Open http://localhost:15672 (guest/guest)
2. Go to **Exchanges** → `articles.events`
3. Check "Message stats" → "Published" count (should increase)
4. Go to **Queues** → `indexer.articles`
5. Check "Ready" count (messages should be in the queue if consumer is not running)

**Expected result:** 
- ✅ `published_at` is populated for all replayed events
- ✅ `last_error` is cleared (set to NULL)
- ✅ Events appear in RabbitMQ (check exchange publish count or queue)

#### Troubleshooting

**Events not appearing in RabbitMQ:**
- Verify RabbitMQ is running: `docker compose ps rabbitmq`
- Check RabbitMQ logs: `docker compose logs rabbitmq`
- Verify connection in Management UI: http://localhost:15672

**Events still show as unpublished after replay:**
- Check replay command output for errors
- Verify RabbitMQ connection settings in `.env`
- Check `last_error` field for specific error messages

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

## Testing Stale Event Protection

Test that the consumer correctly prevents older events from overwriting newer data when messages arrive out of order. This feature compares `occurred_at` timestamps to ensure events are processed chronologically.

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

#### Step 2: Publish Events Out of Order Using test-stale-protection.php

Use the `test-stale-protection.php` script to publish two events for the same `article_id` with different `occurred_at` timestamps. The script publishes the newer event first, simulating out-of-order delivery:

```bash
# Copy script to container
docker compose cp test-stale-protection.php indexer-service:/tmp/test-stale-protection.php

# Run it
docker compose exec indexer-service php /tmp/test-stale-protection.php

# Clean up
docker compose exec indexer-service rm /tmp/test-stale-protection.php
```

The script will:
- Publish **2 events** for the same `article_id`:
  - **Older event**: `occurred_at = 2024-01-15 10:00:00`, title = "Older Title"
  - **Newer event**: `occurred_at = 2024-01-15 10:01:00`, title = "Newer Title"
- Publish the **newer event first** (simulating out-of-order delivery)
- Display the `article_id` and both `event_id`s for reference
- Show the final queue count

**Expected output:**
```
=== Publishing Events ===
Article ID: test-article-stale-1234567890
Event 1 (OLDER): occurred_at = 2024-01-15T10:00:00+00:00, title = 'Older Title'
Event 2 (NEWER): occurred_at = 2024-01-15T10:01:00+00:00, title = 'Newer Title'

Publishing NEWER event first...
✓ Published newer event (event_id: event-newer-...)
Publishing OLDER event second...
✓ Published older event (event_id: event-older-...)

Queue 'indexer.articles' now has 2 message(s)

=== Test Setup Complete ===
Article ID: test-article-stale-1234567890
Older Event ID: event-older-...
Newer Event ID: event-newer-...

Next: Process messages with consumer and verify stale event is skipped.
```

**Note:** Save the `article_id` and `event_id`s from the output - you'll need them for verification.

#### Step 3: Process Messages with Consumer

Now start the consumer to process both messages:

```bash
docker compose exec indexer-service php artisan rabbitmq:consume-articles --max=2
```

**What to watch for in the output:**
- First message (newer event): Should show "Processed successfully (event: article.updated, article_id: ...)"
- Second message (older event): Should show "Stale event ignored (event_id: ..., article_id: ...)" - this confirms stale protection!

**Expected output:**
```
Message 1: Processed successfully (event: article.updated, article_id: test-article-stale-...)
Message 2: Stale event ignored (event_id: event-older-..., article_id: test-article-stale-...)
Processed 2 message(s)
```

The consumer will process both messages and then exit (due to `--max=2`).

#### Step 4: Verify Stale Event Protection in Database

After the consumer completes, verify that:
1. The newer event was applied (article has "Newer Title")
2. The older event was skipped (stale protection worked)
3. Both events were recorded in `processed_events` (idempotency)

**Using Laravel Tinker:**

```bash
docker compose exec indexer-service php artisan tinker
```

Then in tinker (replace `test-article-stale-...` with the actual `article_id` from Step 2):

```php
// Find the article
$articleId = 'test-article-stale-...'; // Use the article_id from script output
$article = \App\Models\IndexedArticle::where('article_id', $articleId)->first();

// Check the final state - should reflect the NEWER event
$article->title;        // Should be "Newer Title" (NOT "Older Title")
$article->body;         // Should be "This is the newer event"
$article->status;       // Should be "published"
$article->last_event;   // Should be "article.updated"
$article->last_event_at; // Should be "2024-01-15 10:01:00" (newer timestamp)

// Check processed events - BOTH should be recorded
\App\Models\ProcessedEvent::where('event_id', 'like', 'event-%')
    ->orderBy('processed_at')
    ->get(['event_id', 'event_name', 'processed_at']);
// Should show both events were recorded, even though one was stale
```

**Using SQLite directly:**

```bash
# Check the indexed article (replace article_id)
docker compose exec indexer-service sqlite3 database/database.sqlite "SELECT article_id, title, status, last_event, last_event_at FROM indexed_articles WHERE article_id LIKE 'test-article-stale-%';"

# Check processed events
docker compose exec indexer-service sqlite3 database/database.sqlite "SELECT event_id, event_name, processed_at FROM processed_events WHERE event_id LIKE 'event-%' ORDER BY processed_at;"
```

**Test PASSES if:**
- ✅ Article title is "Newer Title" (not "Older Title")
- ✅ Article `last_event_at` is `2024-01-15 10:01:00` (newer timestamp)
- ✅ Consumer log shows "Stale event ignored" for the older event
- ✅ Both events appear in `processed_events` table (both were recorded as processed)

**What this proves:**
- The time-based comparison (`occurred_at` vs `last_event_at`) successfully prevents stale events from overwriting newer data
- The consumer correctly handles out-of-order message delivery
- Older events are skipped but still recorded as processed (for idempotency)
- The final state reflects the most recent event, not the first one processed

#### Step 5: Verify Queue is Empty

After processing, check the RabbitMQ Management Console again:

1. Go to **Queues** > `indexer.articles`
2. **Ready** should be 0 (all messages processed)
3. **Total** shows how many messages were processed (should be 2)

### Troubleshooting

**Issue: Both events are processed (no stale detection)**
- Verify the `occurred_at` timestamps are different (check the script output)
- Check that the newer event was processed first (look at consumer logs)
- Ensure the article exists before the older event arrives (check `indexed_articles` table)

**Issue: Article shows "Older Title" instead of "Newer Title"**
- Verify the events were published in the correct order (newer first)
- Check that the consumer processed messages in the order they were published
- Verify `last_event_at` timestamp matches the newer event's `occurred_at`

**Issue: No messages appear in RabbitMQ Management UI**
- Check if a consumer is running: `docker compose exec indexer-service ps aux | grep consume`
- If consumer is running, stop and restart the container: `docker compose stop indexer-service && docker compose up -d indexer-service`

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

### Static analysis and linting
- I have not ran PHPStan or Laravel Pint because I have ran out of time at this point. So I don't know what the results of that would be.

### Git init
- The git init should have been done in the root of the project, not in the next level up. I didn't have time to fix that.
