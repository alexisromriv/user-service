<?php

namespace MyApp\User\Infrastructure;

use MyApp\Shared\Application\Logging;

class UserController
{
    private $logger;

    public function __construct(Logging $logger) {
        $this->logger = $logger;
    }
    public function login()
    {
        // add records to the log
        $this->logger->log('Logued in');
    }
}
