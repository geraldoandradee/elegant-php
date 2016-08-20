<?php

namespace ElegantPHP\Routers\FastRouter;

class RouteCollection
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