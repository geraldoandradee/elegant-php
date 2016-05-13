<?php

namespace ElegantPHP\Controllers;

class BaseController
{
    private $basePath;

    public function loadView($viewName, $params = array())
    {
        if (!is_null($params) || count($params) > 0) {
            extract($params);
        }

        ob_start();
        include $this->basePath . "/module/" . $this->app . "/view/" . $viewName . ".php";
        return ob_get_clean();
    }
}