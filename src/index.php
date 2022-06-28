<?php
require('./vendor/autoload.php');

use MyApp\Config\App;

/* set_exception_handler(function ($ex) {
	die($ex->getMessage());
}); */


$builder = new DI\ContainerBuilder();
$builder->addDefinitions('app/config/container.php');
$container = $builder->build();


$app = $container->get(App::class);
$app->start();
