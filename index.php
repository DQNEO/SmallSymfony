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
function main()
{
    $response = new Response("hello world");
    return $response;
}

$response = main();
$response->send();

