<?php

namespace MyApp\User\Application;

use MyApp\Shared\Application\Logging;
use MyApp\User\Domain\Contracts\UserRepositoryContract;

class UserFinder
{
    private $repository;

    public function __construct(UserRepositoryContract $repository) {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
}
