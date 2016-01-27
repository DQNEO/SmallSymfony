<?php
require_once __DIR__ . '/SmallSymony.php';

use SmallSymfony\HttpKernel;
use SmallSymfony\Request;
use SmallSymfony\Response;

class Application {}

$actions = [
    '/' => function(Request $request) {
        $name = $request->query('name');
        $body = "hello " . $name . " from index aciotn by path " . $request->path;
        $response = new Response($body);
        return $response;
    },
    '/foo' => function(Request $request) {
        $name = $request->query('name');
        $body = "hello " . $name . " from foo aciotn by path " . $request->path;
        $response = new Response($body);
        return $response;
    },
];

$app = new Application();
$app->actions = $actions;
$httpKernel = new HttpKernel($app);
$request = new Request($_SERVER, $_GET);
$response = $httpKernel->handle($request);
$response->send();

