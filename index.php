<?php
require_once __DIR__ . '/SmallSymony.php';

use SmallSymfony\HttpKernel;
use SmallSymfony\Request;
use SmallSymfony\Response;

$action = function(Request $request)
{
    $name = $request->query('name');
    $body = "hello " . $name . " from " . $request->path;
    $response = new Response($body);
    return $response;
};


$httpKernel = new HttpKernel($action);
$request = new Request($_SERVER, $_GET);
$response = $httpKernel->handle($request);
$response->send();

