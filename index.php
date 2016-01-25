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
    public function handle($get)
    {
        $name = $get['name'];
        $response = new Response("hello " . $name);
        return $response;
    }

}


$httpKernel = new HttpKernel();
$response = $httpKernel->handle($_GET);
$response->send();

