<?php

namespace ElegantPHP\Tests\Routers\FastRouter;

use ElegantPHP\Factory\Builder;
use ElegantPHP\Routers\FastRouter\Route;
use ElegantPHP\Routers\FastRouter\Router;

class RouterTest extends \PHPUnit_Framework_TestCase
{
    public function testRoute()
    {
        $router = Builder::getInstance('ElegantPHP\Routers\FastRouter\Router');
//        $router->init();

//        $route = new Route('/', 'ControllerExampleTest::add', 'home', 'GET');

//        $this->assertEquals('/', $route->getPattern(), 'Pattern does not match');
//        $this->assertEquals('ControllerExampleTest::add', $route->getController(), 'Controller does not match');
//        $this->assertEquals('home', $route->getName(), 'Route name does not match');
//        $this->assertEquals('GET', $route->getMethod(), 'Method does not match');
    }
    public function testInitRoute()
    {
        $router = Builder::getInstance('ElegantPHP\Routers\FastRouter\Router');
//        $router->init();

//        $route = new Route('/', 'ControllerExampleTest::add', 'home', 'GET');

//        $this->assertEquals('/', $route->getPattern(), 'Pattern does not match');
//        $this->assertEquals('ControllerExampleTest::add', $route->getController(), 'Controller does not match');
//        $this->assertEquals('home', $route->getName(), 'Route name does not match');
//        $this->assertEquals('GET', $route->getMethod(), 'Method does not match');
    }

}
