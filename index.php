<?php
class Request
{
    public $get;

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
     * @return Response
     */
    public function handle(Request $request)
    {
        $name = $request->query('name');
        $body = "hello " . $name;
        $response = new Response($body);
        return $response;
    }

}


$httpKernel = new HttpKernel();
$request = new Request($_GET);
$response = $httpKernel->handle($request);
$response->send();

