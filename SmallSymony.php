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
            $this->path = $server['PATH_INFO'];
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

    public function __construct(array  $actions)
    {
        $this->actions = $actions;

    }

    public function handle(Request $request) : Response
    {
        $controller = $this->resolveController($request);
        $response =  $controller($request);
        return $response;
    }

    private function resolveController(Request $request) : callable
    {
         return $this->actions['/'];
    }

}
