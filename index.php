<?php

// composer autoloader init
$loader = require 'vendor/autoload.php';
$loader->register();

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

switch($request->getPathInfo()) {
    case '/':
        $response->setContent('Home page');
        break;
    case '/about':
        $response->setContent('Info page');
        break;
    default:
        $response->setContent('404. Not Found');
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
}
$response->send();
?>