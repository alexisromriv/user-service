<?php

namespace MyApp\User\Infrastructure;

use MyApp\User\Domain\Contracts\UserRepositoryContract;
use MyApp\User\Domain\User;
use MyApp\User\Domain\UserDto;

class UserRepository implements UserRepositoryContract
{


    public function getAll($criteria = null): array
    {
        // Create connection
        $conn = new \mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PWD'], $_ENV['DB_NAME']);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users";

        $result = $conn->query($sql);
        $conn->close();

        return $result->fetch_assoc();
    }

    public function create(User $user): UserDto
    {
        // Create connection
        $conn = new \mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PWD'], $_ENV['DB_NAME']);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('" . $user->getFirstName() . "', '" . $user->getLastName() . "', '" . $user->getEmail() . "', '" . $user->getPassword() . "')";

        $result = $conn->query($sql);
        if ($result === false) {
            throw new \RuntimeException("Can't create user: " . $conn->error);
        }
        $conn->close();

        return new UserDto(
            $user->getFirstName(),
            $user->getLastName(),
            $user->getEmail(),
            $user->getAddress(),
            $user->getPassword()
        );
    }
}
