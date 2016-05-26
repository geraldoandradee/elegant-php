<?php

namespace ElegantPHP\Routers\FastRouter;


use ElegantPHP\Factory\BaseFactory;

class RouteCollection extends BaseFactory
{
    private $routes = array();

    public function add(Route $route)
    {
        $this->routes[] = $route;
    }

    public function getAll()
    {
        return $this->routes;
    }
}