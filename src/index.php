<?php
require('./vendor/autoload.php');

use Monolog\ErrorHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use MyApp\Config\Bootstrap;
use MyApp\User\Infrastructure\UserController;

/* set_exception_handler(function ($ex) {
	die($ex->getMessage());
}); */


$builder = new DI\ContainerBuilder();
$builder->addDefinitions('app/config/container.php');
$container = $builder->build();


$bootstrap = $container->get(Bootstrap::class);

$router = $bootstrap->getRouter();
$router->dispatch();
