<?php

namespace MyApp\Config;

use MyApp\Shared\Application\Logging;

class App
{
  private $router;
  private $logger;


  public function __construct(Router $router, Logging $logger)
  {
    $this->router = $router;
    $this->logger = $logger;
  }


  public function start()
  {
    $this->logger->log('Application started');
    $this->router->dispatch();
    $this->stop();
  }

  public function stop()
  {
    $this->logger->log('Application stopped');
    die();
  }
}
