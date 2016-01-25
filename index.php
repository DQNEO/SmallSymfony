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

/**
 * @return Response
 */
function handle()
{
    $response = new Response("hello world");
    return $response;
}

$response = handle();
$response->send();

