# Articles Events Contract v1

This directory contains the event contract definitions for article-related events published by the Articles Service and consumed by the Indexer Service.

## Events

### article.created
Published when a new article is created.

### article.updated
Published when an existing article is updated.

### article.deleted
Published when an article is deleted.

## Event Format

All events are published to the `articles.events` exchange (topic type) with routing keys that match the event name:
- `article.created`
- `article.updated`
- `article.deleted`

## Required Fields

All events must include the following fields:

- `version` (string): Fixed value `"v1"`
- `event_id` (uuid): Unique identifier for this event instance
- `event_name` (string): One of `"article.created"`, `"article.updated"`, or `"article.deleted"`
- `occurred_at` (string): ISO8601 UTC timestamp when the event occurred
- `article_id` (uuid): Identifier of the article this event relates to
- `article` (object|null): 
  - For `article.created` and `article.updated`: Contains the full article data (id, title, body, status)
  - For `article.deleted`: Omitted or set to `null`

## Stale Protection (Consumer Rule)

To ensure idempotency and prevent stale events from overwriting newer data, the consumer must implement the following rule:

- Maintain `indexed_articles.last_event_at` (or `last_event_at`) in the indexed_articles table
- Only apply an event if `occurred_at >= last_event_at` (or if the row is absent)
- This ensures that events are processed in chronological order and older events cannot overwrite newer data

## Example Payloads

See the example JSON files for complete payload structures:
- `article.created.example.json`
- `article.updated.example.json`
- `article.deleted.example.json`
