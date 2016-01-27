<?php
namespace SmallSymfony;

class Request
{
    private $get;
    private $server;

    public function __construct($server, $get)
    {
        $this->get = $get;
        $this->server = $server;

        if (isset(($server['PATH_INFO']))) {
            return $server['PATH_INFO'];
        } else {
            $this->path = preg_replace('|\?.*|', '', $server['REQUEST_URI']);
        }
    }

    public function query($key)
    {
        return $this->get[$key] ?? null;
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

    protected function action(Request $request) : Response
    {
        $name = $request->query('name');
        $body = "hello " . $name . " from " . $request->path;
        $response = new Response($body);
        return $response;
    }
    public function handle(Request $request) : Response
    {
        $response =  $this->action($request);
        return $response;
    }

}
