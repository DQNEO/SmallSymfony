<?php

class Response
{
    private $body;

    public function __construct($msg)
    {
        $this->body = $msg;
    }

    public function send()
    {
        echo $this->body;
    }

}

class HttpKernel
{

    /**
     * @return Response
     */
    public static function handle()
    {
        $response = new Response("hello world");
        return $response;
    }

}

$response = HttpKernel::handle();
$response->send();

