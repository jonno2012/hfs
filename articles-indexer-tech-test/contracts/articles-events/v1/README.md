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

All events are published to the `articles` exchange (topic type) with routing keys:
- `article.created`
- `article.updated`
- `article.deleted`

See the example JSON files for the payload structure.
