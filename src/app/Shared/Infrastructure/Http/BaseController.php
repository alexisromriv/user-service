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

    public function response($data)
    {
        http_response_code(200);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        die();
    }

    public function responseError($msg, $code = 400)
    {
        http_response_code($code);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(["message" => $msg]);
        die();
    }
}
