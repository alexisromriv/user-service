<?php

namespace MyApp\Shared\Application;

use Monolog\Logger;

class Logging {
    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function log(string $msg)
    {
        $this->logger->warning($msg, ['asd', 'asd2']);
    }
}
