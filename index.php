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
    public function handle()
    {
        $response = new Response("hello world");
        return $response;
    }

}

$httpKernel = new HttpKernel();
$response = $httpKernel->handle();
$response->send();

