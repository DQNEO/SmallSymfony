<?php
require_once __DIR__ . '/SmallSymony.php';

use SmallSymfony\HttpKernel;
use SmallSymfony\Request;
use SmallSymfony\Response;
use SmallSymfony\Application;

$app = new Application();
$app->get('/', function(Request $request) :Response {
    $name = $request->query('name');
    $body = "hello " . $name . " from index aciotn by path " . $request->path;
    $response = new Response($body);
    return $response;
});

$app->get('/foo', function(Request $request) :Response {
    $name = $request->query('name');
    $body = "hello " . $name . " from foo aciotn by path " . $request->path;
    $response = new Response($body);
    return $response;
});


$httpKernel = new HttpKernel($app);
$request = new Request($_SERVER, $_GET);
$response = $httpKernel->handle($request);
$response->send();

