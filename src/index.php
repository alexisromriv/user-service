<?php
require('./vendor/autoload.php');


use MyApp\Config\Bootstrap;


set_exception_handler(function ($ex) {
	die($ex->getMessage());
});

$container = new DI\Container();

$bootstrap = $container->get(Bootstrap::class);

$router = $bootstrap->getRouter();
$router->dispatch();

