<?php

use Monolog\Logger;
use MyApp\User\Infrastructure\UserController;

use function DI\create;

return [
    Logger::class => create(Logger::class),
    UserController::class => create(UserController::class)
];
