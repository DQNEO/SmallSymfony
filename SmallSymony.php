<?php
namespace SmallSymfony;

class Request
{
    private $get;

    public function __construct($get)
    {
        $this->get = $get;
    }

    public function query($key)
    {
        return $this->get[$key];
    }
}

class Response
{
    private $body;

    public function __construct($body)
    {
        $this->body = $body;
    }

    public function send()
    {
        echo $this->body;
    }

}

class HttpKernel
{

    /**
     * @param Request $request
     */
    public function handle(Request $request) : Response
    {
        $name = $request->query('name');
        $body = "hello " . $name;
        $response = new Response($body);
        return $response;
    }

}
