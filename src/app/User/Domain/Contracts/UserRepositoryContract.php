<?php 

namespace MyApp\User\Domain\Contracts;

interface UserRepositoryContract
{
    public function getAll($criteria = null): array;
}
