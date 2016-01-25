<?php

class Response
{
    public $body;

    public function __construct($msg)
    {
        $this->body = $msg;
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
echo $msg->body;

