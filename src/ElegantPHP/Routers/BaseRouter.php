<?php

namespace ElegantPHP\Routers;

use ElegantPHP\Routers\FastRouter\RouteCollection;

interface BaseRouter
{
    /**
     * @param $httpMethod $_SERVER['REQUEST_METHOD']
     * @param $uri $_SERVER['REQUEST_URI']
     * @return mixed
     */
    public function dispatch($httpMethod, $uri);

    public function init(RouteCollection $collection);
}
