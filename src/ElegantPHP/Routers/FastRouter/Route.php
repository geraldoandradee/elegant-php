<?php

namespace ElegantPHP\Routers\FastRouter;


class Route
{
    private $name;
    private $method;
    private $pattern;
    private $controller;
    private $static = false;

    public function __construct($pattern, $controller, $name = '', $method = 'GET')
    {
        $this->setPattern($pattern);
        $this->setController($controller);
        $this->setName($name);
        $this->setMethod($method);
    }

    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Route name.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Controller must be provided in format "Controller::method".
     *
     * @param string $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        return $this->static;
    }

    /**
     * @param bool $static
     */
    public function setStatic($static)
    {
        $this->static = boolval($static);
    }
}
