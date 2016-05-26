<?php

namespace ElegantPHP\Controllers;

class BaseController
{
    private $basePath;

    public function __construct()
    {

    }

    /**
     * @param string $viewName
     * @param array $params
     * @return string
     */
    public function loadView($viewName='index', $params = array())
    {
        if (!is_null($params) || count($params) > 0) {
            extract($params);
        }

        ob_start();
        include $this->getViewPath($viewName);
        return ob_get_clean();
    }

    public function getViewPath($viewName) {
        return $this->getBasePath() . DIRECTORY_SEPARATOR . "view" . DIRECTORY_SEPARATOR . $this->getApp() . DIRECTORY_SEPARATOR . $viewName . ".php";
    }

    public function getBasePath()
    {
        return $this->basePath;
    }

    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
    }

    public function getApp()
    {
        $fullControllerName = explode('\\', get_class($this));
        return $fullControllerName[count($fullControllerName) - 1];
    }
}
