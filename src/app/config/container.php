<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MyApp\Shared\Application\Logging;
use MyApp\Shared\Infrastructure\RabbitMQProducer;
use MyApp\User\Domain\Contracts\Producer;
use MyApp\User\Domain\Contracts\UserRepositoryContract;
use MyApp\User\Infrastructure\UserRepository;

use function DI\create;

$logger = new Logger('name');
$logger->pushHandler(new StreamHandler('logs/application.log', Logger::INFO));


return [
    Logging::class => new Logging($logger),
    UserRepositoryContract::class => create(UserRepository::class),
    Producer::class => create(RabbitMQProducer::class)
];
