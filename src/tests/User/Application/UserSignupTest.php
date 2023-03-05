<?php

use MyApp\User\Application\UserSignup;
use PHPUnit\Framework\TestCase;

class UserSignupTest extends TestCase
{

    public function testMyTest(): void
    {
        $service = new UserSignup();
        self::assertEquals($service->sum(2,0), 2);
    }
}
