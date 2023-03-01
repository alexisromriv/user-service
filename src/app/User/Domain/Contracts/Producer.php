<?php

namespace MyApp\User\Domain\Contracts;


interface Producer
{
    public function publish($event): void;
}
