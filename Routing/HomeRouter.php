<?php
namespace repro\Routing;

use repro\Controller\HomeController;

class HomeRouter extends AbstractRouter
{
    public static function route(?string $action = null)
    {
        (new HomeController())->index();
    }
}