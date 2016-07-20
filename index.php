<?php

switch($_SERVER['REQUEST_URI']) {
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