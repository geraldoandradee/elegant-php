<?php

namespace ElegantPHP\Tests\Routers\FastRouter;


use ElegantPHP\Routers\FastRouter\Route;

class RouteTest extends \PHPUnit_Framework_TestCase
{
    public function testRoute()
    {
        $route = new Route('/', 'ControllerExampleTest::add', 'home', 'GET');

        $this->assertEquals('/', $route->getPattern(), 'Pattern does not match');
        $this->assertEquals('ControllerExampleTest::add', $route->getController(), 'Controller does not match');
        $this->assertEquals('home', $route->getName(), 'Route name does not match');
        $this->assertEquals('GET', $route->getMethod(), 'Method does not match');
    }


}