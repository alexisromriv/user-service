<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MyApp\Shared\Application\Logging;

$logger = new Logger('name');
$logger->pushHandler(new StreamHandler('logs/application.log', Logger::INFO));


return [
    Logging::class => new Logging($logger)
];
