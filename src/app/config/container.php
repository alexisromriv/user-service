<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MyApp\User\Infrastructure\UserController;


$logger = new Logger('name');
$logger->pushHandler(new StreamHandler('logs/application.log', Logger::INFO));


return [
    Logger::class => $logger,
    UserController::class => new UserController($logger)
];
