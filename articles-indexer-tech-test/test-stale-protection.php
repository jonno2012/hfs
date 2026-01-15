<?php

require '/var/www/html/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$host = 'rabbitmq';
$port = 5672;
$user = 'guest';
$password = 'guest';
$vhost = '/';
$exchange = 'articles.events';
$queue = 'indexer.articles';

echo "Connecting to RabbitMQ...\n";
$conn = new AMQPStreamConnection($host, $port, $user, $password, $vhost);
$ch = $conn->channel();

echo "Declaring exchange: {$exchange}\n";
$ch->exchange_declare($exchange, 'topic', false, true, false);

echo "Declaring queue: {$queue}\n";
$ch->queue_declare($queue, false, true, false, false);

echo "Binding queue to exchange with routing key: article.*\n";
$ch->queue_bind($queue, $exchange, 'article.*');

// Use a fixed article_id for both events
$articleId = 'test-article-stale-' . time();
$baseTime = new DateTime('2024-01-15 10:00:00', new DateTimeZone('UTC'));

// Event 1: Older event (occurred_at = 10:00:00)
$olderEvent = [
    'version' => 'v1',
    'event_id' => 'event-older-' . time(),
    'event_name' => 'article.created',
    'occurred_at' => $baseTime->format('c'), // 10:00:00
    'article_id' => $articleId,
    'article' => [
        'id' => $articleId,
        'title' => 'Older Title',
        'body' => 'This is the older event',
        'status' => 'draft'
    ]
];

// Event 2: Newer event (occurred_at = 10:01:00)
$newerTime = clone $baseTime;
$newerTime->modify('+1 minute');
$newerEvent = [
    'version' => 'v1',
    'event_id' => 'event-newer-' . time(),
    'event_name' => 'article.updated',
    'occurred_at' => $newerTime->format('c'), // 10:01:00
    'article_id' => $articleId,
    'article' => [
        'id' => $articleId,
        'title' => 'Newer Title',
        'body' => 'This is the newer event',
        'status' => 'published'
    ]
];

echo "\n=== Publishing Events ===\n";
echo "Article ID: {$articleId}\n";
echo "Event 1 (OLDER): occurred_at = {$olderEvent['occurred_at']}, title = '{$olderEvent['article']['title']}'\n";
echo "Event 2 (NEWER): occurred_at = {$newerEvent['occurred_at']}, title = '{$newerEvent['article']['title']}'\n\n";

// Publish NEWER event first (simulating out-of-order delivery)
echo "Publishing NEWER event first...\n";
$msg1 = new AMQPMessage(json_encode($newerEvent), ['delivery_mode' => 2]);
$ch->basic_publish($msg1, $exchange, 'article.updated');
echo "✓ Published newer event (event_id: {$newerEvent['event_id']})\n";

// Publish OLDER event second
echo "Publishing OLDER event second...\n";
$msg2 = new AMQPMessage(json_encode($olderEvent), ['delivery_mode' => 2]);
$ch->basic_publish($msg2, $exchange, 'article.created');
echo "✓ Published older event (event_id: {$olderEvent['event_id']})\n";

// Check queue message count
list($queueName, $messageCount, $consumerCount) = $ch->queue_declare($queue, true, true, false, false);
echo "\nQueue '{$queueName}' now has {$messageCount} message(s)\n";

$ch->close();
$conn->close();

echo "\n=== Test Setup Complete ===\n";
echo "Article ID: {$articleId}\n";
echo "Older Event ID: {$olderEvent['event_id']}\n";
echo "Newer Event ID: {$newerEvent['event_id']}\n";
echo "\nNext: Process messages with consumer and verify stale event is skipped.\n";