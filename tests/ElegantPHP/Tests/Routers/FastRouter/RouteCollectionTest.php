<?php

namespace ElegantPHP\Tests\Routers\FastRouter;


use ElegantPHP\Factory\Builder;
use ElegantPHP\Routers\FastRouter\Route;
use ElegantPHP\Routers\FastRouter\RouteCollection;

class RouteCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testRouteCollection()
    {
        $routeCollection = Builder::getInstance("ElegantPHP\\Routers\\FastRouter\\RouteCollection");
        $routeCollection->add(new Route('/', 'ControllerExampleTest::add', 'home', 'GET'));
        $routeCollection->add(new Route('/contact', 'Contact::index', 'contact', 'POST'));
        $routes = $routeCollection->getAll();

        $this->assertCount(2, $routes, 'It must contain two routes');
        $this->assertEquals('/', $routes[0]->getPattern(), 'Pattern not expected');
        $this->assertEquals('/contact', $routes[1]->getPattern(), 'Pattern not expected');

        $this->assertEquals('ControllerExampleTest::add', $routes[0]->getController(), 'Controller not expected');
        $this->assertEquals('Contact::index', $routes[1]->getController(), 'Controller not expected');

        $this->assertEquals('home', $routes[0]->getName(), 'Route name not expected');
        $this->assertEquals('contact', $routes[1]->getName(), 'Route name not expected');

        $this->assertEquals('GET', $routes[0]->getMethod(), 'Route method not expected');
        $this->assertEquals('POST', $routes[1]->getMethod(), 'Route method not expected');
    }


}