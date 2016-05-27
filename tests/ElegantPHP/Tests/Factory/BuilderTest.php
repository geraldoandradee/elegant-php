<?php

namespace ElegantPHP\Tests\Factory;


use ElegantPHP\Factory\Builder;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstance() {
        $instance = Builder::getInstance('ElegantPHP\Routers\FastRouter\Route', array('home', 'ControllerExampleTest'));
        $this->assertInstanceOf('ElegantPHP\Routers\FastRouter\Route', $instance, 'It must be Route instance');

        $instance = Builder::getInstance('ElegantPHP\Exceptions\ConfigurationException');
        $this->assertInstanceOf('ElegantPHP\Exceptions\ConfigurationException', $instance, 'It must be ConfigurationException instance');
    }
}