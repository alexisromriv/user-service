<?php 

namespace MyApp\User\Domain\Contracts;

use MyApp\User\Domain\User;

interface UserRepositoryContract
{
    public function getAll($criteria = null): array;

    public function create(User $user): User;
}
