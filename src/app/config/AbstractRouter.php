<?php

namespace MyApp\Config;

use DI\Container;

abstract class AbstractRouter
{
    private $routes = [];
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->getRoutes();
    }

    public function dispatch()
    {
        $requestMethods = [
            'GET' => $_GET,
            'POST' => $_POST,
        ];
        
        $path = $_SERVER['REQUEST_URI'] . '_' .$_SERVER['REQUEST_METHOD'];
        
        $path = ltrim($path, '/');

        $route =  $this->routes[$path];

        if (!$route) {
            throw new \Exception("Error Processing Request: Route not found");
        }

        $controllerClass = $this->routes[$path]['controller'];
        $methodName = $this->routes[$path]['method'];

        $controller = $this->container->get($controllerClass);
        $controller->$methodName();
    }

    protected function get(string $path, string $controller, string $method)
    {
        $this->routes[$path . '_GET'] = compact('controller', 'method');
    }

    protected function post(string $path, string $controller, string $method)
    {
        $this->routes[$path . '_POST'] = compact('controller', 'method');
    }

    protected abstract function getRoutes();
}
