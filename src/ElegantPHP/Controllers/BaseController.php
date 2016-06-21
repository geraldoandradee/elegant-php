<?php

namespace ElegantPHP\Controllers;

class BaseController
{
    private $basePath;

    /**
     * @param string $viewName
     * @param array $params
     * @return string
     */
    public function loadView($viewName = 'index', $params = array())
    {
        if (!is_null($params) || count($params) > 0) {
            extract($params);
        }

        ob_start();
        include $this->getViewPath($viewName);
        return ob_get_clean();
    }

    public function getViewPath($viewName)
    {
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

    /**
     * This must return a class name.
     *
     * This will be used:
     *
     * * This will be used in MVC to get controller's view folder.
     *
     * @param bool $fullController True to get class full name
     * @return string
     */
    public function getApp($fullController = false)
    {
        $fullControllerName = get_class($this);

        if ($fullController) {
            return $fullControllerName;
        }
        $explodedControllerName = explode('\\', $fullControllerName);
        return $explodedControllerName[count($explodedControllerName) - 1];
    }
}
