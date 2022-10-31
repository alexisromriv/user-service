<?php

namespace MyApp\User\Application;

use MyApp\User\Domain\Contracts\UserRepositoryContract;
use MyApp\User\Domain\User;

class UserCreator
{
    private $repository;

    public function __construct(UserRepositoryContract $repository) {
        $this->repository = $repository;
    }

    public function create(array $data): User
    {
        $user = new User(
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            $data['address']
        );
        return $this->repository->create($user);
    }
}
