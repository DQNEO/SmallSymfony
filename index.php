<?php
class Request
{
    public $get;

    public function __construct($get)
    {
        $this->get = $get;
    }
}

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
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request)
    {
        $name = $request->get['name'];
        $response = new Response("hello " . $name);
        return $response;
    }

}


$httpKernel = new HttpKernel();
$request = new Request($_GET);
$response = $httpKernel->handle($request);
$response->send();

