<?php
/**
 * Application base class.
 *
 * @author Geraldo Andrade <geraldo@geraldoandrade.com>
 * @date 20/08/2016
 */

namespace ElegantPHP;


use ElegantPHP\Routers\FastRouter\Router;

class Application
{
    private $router;
    private $request;
    private $response;

    public function run()
    {
        if (!isset($this->router)) {
            $this->router = new Router();
        }

        $this->router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

        echo "rodou";
    }


    public function setRouter($router)
    {
        $this->router = $router;
    }

    public function getRouter()
    {
        return $this->router;
    }
}