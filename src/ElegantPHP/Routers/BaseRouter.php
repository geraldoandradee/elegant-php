<?php

namespace ElegantPHP\Routers;

interface BaseRouter
{
    /**
     * @return mixed
     */
    public function dispatch();

    /**
     * @param $path
     * @return mixed
     */
    public function init($path, $params, $controller = null);
}