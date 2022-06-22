<?php

namespace MyApp\Config;

class Bootstrap
{
  private $router; 

  public function __construct(Router $router) {
    $this->router = $router;
  }

  public function getRouter()
  {
    return $this->router;
  }

}
