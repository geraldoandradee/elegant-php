<?php

namespace ElegantPHP\Routers\FastRouter;

use ElegantPHP\Factory\Builder;
use ElegantPHP\Routers\BaseRouter;

class Router implements BaseRouter
{
    private $routeCollection;
    private $httpMethod;
    private $uri;

    /**
     * @param $httpMethod $_SERVER['REQUEST_METHOD']
     * @param $uri $_SERVER['REQUEST_URI']
     * @return mixed
     */
    public function dispatch($httpMethod, $uri)
    {
        $this->setHttpMethod($httpMethod);
        $this->setUri($uri);

        foreach ($this->routeCollection as $route) {
            if ($this->match($route)) {
                call_user_func($route->getController());
            }
        }
    }

    public function init(RouteCollection $collection)
    {
        $this->routeCollection = $collection;
    }

    private function match(Route $route)
    {
        return Builder::getInstance('ElegantPHP\Routers\FastRouter\Matcher')->setRoute($route)->match();
    }

    /**
     * @return mixed
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * @param mixed $httpMethod
     */
    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
}
