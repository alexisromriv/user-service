<?php

namespace MyApp\Config;

use MyApp\User\Infrastructure\UserController;

class Router extends AbstractRouter
{
    public function getRoutes()
    {
        $this->get('api/v1/users/signup', UserController::class, 'login');
        $this->get('api/v1/users', UserController::class, 'getAll');
        $this->post('api/v1/users', UserController::class, 'create');
    }

}
