<?php

namespace MyApp\User\Application;

use MyApp\User\Domain\Contracts\Producer;
use MyApp\User\Domain\Contracts\UserRepositoryContract;
use MyApp\User\Domain\User;
use MyApp\User\Domain\UserDto;

class UserCreator
{
    private $repository;
    private $producer;

    public function __construct(UserRepositoryContract $repository, Producer $producer) {
        $this->repository = $repository;
        $this->producer = $producer;
    }

    public function create(array $data): UserDto
    {
        $user = new User(
            $data['firstName'],
            $data['lastName'],
            $data['email'],
            $data['address'],
            $data['password']
        );
        $this->producer->publish(['data' => $user]);
        return $this->repository->create($user);
    }
}
