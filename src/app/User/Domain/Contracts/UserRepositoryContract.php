<?php 

namespace MyApp\User\Domain\Contracts;

use MyApp\User\Domain\User;
use MyApp\User\Domain\UserDto;

interface UserRepositoryContract
{
    public function getAll($criteria = null): array;

    public function create(User $user): UserDto;
}
