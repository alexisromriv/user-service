<?php

namespace MyApp\Shared\Infrastructure;

use MyApp\User\Domain\Contracts\Producer;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


class RabbitMQProducer implements Producer
{

    public function __construct()
    {
    }

    public function publish($event): void
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare($event['topic'], false, false, false, false);
        $msg = new AMQPMessage(json_encode(['timestamp' => time(), 'message' => $event['data']]));

        $channel->basic_publish($msg, '', $event['topic']);
        $channel->close();
        $connection->close();
    }
}
