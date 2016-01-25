<?php
require_once __DIR__ . '/SmallSymony.php';

use SmallSymfony\HttpKernel;
use SmallSymfony\Request;
use SmallSymfony\Response;


$httpKernel = new HttpKernel();
$request = new Request($_GET);
$response = $httpKernel->handle($request);
$response->send();

