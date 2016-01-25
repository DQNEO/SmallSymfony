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
    $msg = new Response("hello world");
    return $msg;
}

$msg = main();
$msg->send();

