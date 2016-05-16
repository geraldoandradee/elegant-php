<?php

namespace ElegantPHP\Routers;

use ElegantPHP\Controllers;

class FastRouter implements BaseRouter
{
    private static $instance = null;
    private $controller = null;
    private $uri;
    private $queryString;
    private $getParams = [];

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new FastRouter();
        }

        return self::$instance;
    }

    public function dispatch()
    {
        return $this->getController();
    }

    /**
     * @param $path
     * @param $queryString
     * @param null $controller
     * @return mixed
     */
    public function init($path, $queryString, $controller = null)
    {
        $this->uri = $path;
        $this->queryString = $queryString;
        $this->parseGetString();
        $this->controller = $controller;
    }

    public function getController()
    {
        if (!is_null($this->controller)) {
            $controller = $this->controller;
//            return new $controller();
        }

    }

    private function parseGetString()
    {
        $this->getParams = [];
        $data = explode('&', $this->queryString);
        if (!empty($this->queryString) && count($data) > 0) {
            foreach ($data as $d) {
                $q = explode('=', $d);
                $this->getParams[$q[0]] = $q[1];
            }
        }
    }

    public function getParams()
    {
        return count($this->getParams) > 0 ? $this->getParams : null;
    }

    public function get($paramName)
    {
        try {
            return $this->getParams[$paramName];
        } catch (\Exception $e) {
            return null;
        }
    }

    public function set($paramName, $value)
    {
        $this->getParams[$paramName] = $value;
    }
}