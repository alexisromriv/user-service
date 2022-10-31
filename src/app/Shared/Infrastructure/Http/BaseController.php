<?php
//todo: move to shared library
namespace MyApp\Shared\Infrastructure\Http;

class BaseController
{

    function getBody()
    {
        $body = file_get_contents('php://input');
        return json_decode($body, true);
    }
}
