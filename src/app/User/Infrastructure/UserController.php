<?php

namespace MyApp\User\Infrastructure;

use Monolog\Logger;

class UserController
{
    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }
    public function login()
    {
        // add records to the log
        $this->logger->warning('Foo', ['asd', 'asd2']);


        die('logued in');
    }
}
