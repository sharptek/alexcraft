<?php

// composer autoloader init
$loader = require 'vendor/autoload.php';
$loader->register();

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

switch($request->getPathInfo()) {
    case '/':
        echo 'Home page';
        break;
    case '/about':
        echo 'Info page';
        break;
    default:
        echo '404. Not Found';
}

?>