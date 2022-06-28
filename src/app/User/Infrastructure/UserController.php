<?php

namespace MyApp\User\Infrastructure;

use MyApp\Shared\Application\Logging;
use MyApp\User\Application\UserFinder;

class UserController
{
    private $logger;
    private $userFinder;


    public function __construct(Logging $logger, UserFinder $userFinder) {
        $this->logger = $logger;
        $this->userFinder = $userFinder;
    }
    public function login()
    {
        // add records to the log
        $this->logger->log('Logued in');
    }

    public function getAll()
    {
        $this->logger->log('getAll users');
        $result = $this->userFinder->getAll();
        die(var_dump($result));
    }
}
