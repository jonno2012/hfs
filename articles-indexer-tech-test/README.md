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

## Setup

_Setup instructions will be added here._

## Running Services

_Running instructions will be added here._
