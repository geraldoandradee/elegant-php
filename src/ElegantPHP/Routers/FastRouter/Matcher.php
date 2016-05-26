<?php

namespace ElegantPHP\Routers\FastRouter;


use ElegantPHP\Factory\BaseFactory;

class Matcher extends BaseFactory
{
    private $route;
    private $pattern;
    private $params = array();

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param $param
     * @return null|string
     */
    public function getParam($param)
    {
        if (!isset($this->params[$param])) {
            return null;
        }
        return $this->params[$param];
    }

    /**
     * @param array $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    public function setParam($key, $value)
    {
        $this->params[$key] = $value;

        return $this;
    }

    public function match()
    {
        $hasMatched = (bool)preg_match($this->getPattern(), $this->getRequestUri(), $matches);

        $this->setParams($matches);

        return $hasMatched;
    }

    private function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * @return mixed
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param mixed $pattern
     * @return $this
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param Route $route
     * @return $this
     */
    public function setRoute(Route $route)
    {
        $this->route = $route;

        return $this;
    }
}
