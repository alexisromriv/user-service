<?php

use MyApp\User\Application\UserCreator;
use MyApp\User\Application\UserFinder;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

class UserControllerTest extends TestCase
{

    public function should_create_user(): void
    {
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->userFinder = $this->createMock(UserFinder::class);
        $this->userCreator = $this->createMock(UserCreator::class);
    }
}
