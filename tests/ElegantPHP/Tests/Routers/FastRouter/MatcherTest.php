<?php

namespace ElegantPHP\Tests\Routers\FastRouter;


use ElegantPHP\Factory\Builder;
use ElegantPHP\Routers\FastRouter\Matcher;
use ElegantPHP\Routers\FastRouter\Route;

class MatcherTest extends \PHPUnit_Framework_TestCase
{
    public function testMatcher()
    {
        $matcher = Matcher::getInstance();
        $matcher->setPattern('/\/$/');
        $_SERVER['REQUEST_URI'] = '/home';

        $this->assertFalse($matcher->match(), '"/" does not match with "/home"');
        $this->assertCount(0, $matcher->getParams(), 'Params count must be zero');

        $matcher->setPattern('/home/');
        $_SERVER['REQUEST_URI'] = '/home';

        $this->assertTrue($matcher->match(), '"home" does match with "/home"');
        $this->assertCount(1, $matcher->getParams(), 'Params count must be one');

        $_SERVER['REQUEST_URI'] = '/post/how-to-make-tests-securely';
        $matcher->setPattern('/(?P<controller>[a-z]+)\/(?P<permalink>[a-zA-Z\-]+)/');
        $this->assertTrue($matcher->match(), '"/(?P<controller>[a-z]+)\/(?P<permalink>[a-zA-Z\-]+)/" does match with "/post/how-to-make-tests-securely"');
        $this->assertCount(5, $matcher->getParams(), 'Params count must be five');

        $this->assertNotNull($matcher->getParam('controller'), 'Params count must be five');
        $this->assertEquals('post', $matcher->getParam('controller'), 'Params count must be five');

        $this->assertNotNull($matcher->getParam('permalink'), 'Params count must be five');
        $this->assertEquals('how-to-make-tests-securely', $matcher->getParam('permalink'), 'Params count must be five');
    }

    public function testGetSetParam() {
        $matcher = Matcher::getInstance();
        $matcher->setPattern('/post\/$/');
        $_SERVER['REQUEST_URI'] = '/post/';
        $matcher->setParam('id', 12);
        $this->assertEquals(12, $matcher->getParam('id'), 'It must return 12');
        $this->assertNull($matcher->getParam('not_exists'), 'It must return null');
    }

    public function testGetSetRoute() {
        $matcher = Matcher::getInstance();
        $matcher->setPattern('/post\/$/');
        $_SERVER['REQUEST_URI'] = '/post/';
        $route = new Route('/post\/$/', 'ControllerTest', 'home-post');
        $matcher->setRoute($route);
        $this->assertEquals($route, $matcher->getRoute(), 'Must be same instance');
    }

    public function testGetSetRouteStatic() {
        $matcher = Builder::getInstance('ElegantPHP\Routers\FastRouter\Matcher');
        $matcher->setPattern('/contato.html');
        $_SERVER['REQUEST_URI'] = '/contato.html';

        $route = new Route('/contato.html', 'ControllerTest', 'home-post');
        $route->setStatic(true);
        $matcher->setRoute($route);

        $this->assertTrue($matcher->match(), 'It must match');
    }
}
