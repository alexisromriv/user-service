<?php

namespace MyApp\Config;

abstract class AbstractRouter
{
    private $routes = [];

    public function __construct()
    {
        $this->getRoutes();
    }

    public function dispatch()
    {
        $requestMethods = [
            'GET' => $_GET,
            'POST' => $_POST,
        ];
        
        $path =  $requestMethods[$_SERVER['REQUEST_METHOD']]['path']. '_' . $_SERVER['REQUEST_METHOD'];
     
        $route =  $this->routes[$path];

        if (!$route) {
            throw new \Exception("Error Processing Request: Route not found");
        }

        $controllerClass = $this->routes[$path]['controller'];
        $methodName = $this->routes[$path]['method'];

        $controller = new $controllerClass;
        $controller->$methodName();
    }

    protected function get(string $path, string $controller, string $method)
    {
        $this->routes[$path . '_GET'] = compact('controller', 'method');
    }

    protected abstract function getRoutes();
}
