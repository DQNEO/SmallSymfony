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
        $name = $_GET['name'];
        $response = new Response("hello " . $name);
        return $response;
    }

}

$httpKernel = new HttpKernel();
$response = $httpKernel->handle();
$response->send();

