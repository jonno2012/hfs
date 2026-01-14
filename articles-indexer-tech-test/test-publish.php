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
$routingKey = 'article.created';

echo "Connecting to RabbitMQ...\n";
$conn = new AMQPStreamConnection($host, $port, $user, $password, $vhost);
$ch = $conn->channel();

echo "Declaring exchange: {$exchange}\n";
$ch->exchange_declare($exchange, 'topic', false, true, false);

echo "Declaring queue: {$queue}\n";
$ch->queue_declare($queue, false, true, false, false);

echo "Binding queue to exchange with routing key: article.*\n";
$ch->queue_bind($queue, $exchange, 'article.*');

$payload = [
    'version' => 'v1',
    'event_id' => 'test-' . time(),
    'event_name' => 'article.created',
    'occurred_at' => date('c'),
    'article_id' => 'test-article-' . time(),
    'article' => [
        'id' => 'test-article-' . time(),
        'title' => 'Test Article',
        'body' => 'Testing queue',
        'status' => 'published'
    ]
];

echo "\nPublishing 3 messages...\n";
for ($i = 1; $i <= 3; $i++) {
    $msg = new AMQPMessage(json_encode($payload), ['delivery_mode' => 2]);
    $ch->basic_publish($msg, $exchange, $routingKey);
    echo "Published message {$i}/3 with routing key: {$routingKey}\n";
}

// Check queue message count
list($queueName, $messageCount, $consumerCount) = $ch->queue_declare($queue, true, true, false, false);
echo "\nQueue '{$queueName}' now has {$messageCount} message(s)\n";

$ch->close();
$conn->close();

echo "\nDone! Check RabbitMQ Management Console at http://localhost:15672\n";
echo "Queue: indexer.articles should show Ready: {$messageCount}\n";
