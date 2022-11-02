<?php

use repro\Routing\AbstractRouter;
use repro\Routing\HomeRouter;
use repro\Controller\ErrorController;

require __DIR__ . '/../include.php';

$page = isset($_GET['c']) ? AbstractRouter::secure($_GET['c']) : 'home';
$method = isset($_GET['a']) ? AbstractRouter::secure($_GET['a']) : 'index';

switch ($page) {
    case 'home':
        HomeRouter::route();
        break;
    default:
        (new ErrorController())->error404($page);
}