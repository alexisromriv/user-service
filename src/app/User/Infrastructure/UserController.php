<?php

namespace MyApp\User\Infrastructure;

use MyApp\Shared\Application\Logging;
use MyApp\Shared\Infrastructure\Http\BaseController;
use MyApp\User\Application\UserCreator;
use MyApp\User\Application\UserFinder;

class UserController extends BaseController
{
    private $logger;
    private $userFinder;
    private $userCreator;


    public function __construct(Logging $logger, UserFinder $userFinder, UserCreator $userCreator)
    {
        $this->logger = $logger;
        $this->userFinder = $userFinder;
        $this->userCreator = $userCreator;
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

    public function create()
    {
        $this->logger->log('Create user');
        $result = $this->userCreator->create($this->getBody());
        die(var_dump($result));
    }
}
