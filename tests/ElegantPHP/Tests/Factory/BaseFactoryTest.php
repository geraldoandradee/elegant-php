<?php

namespace ElegantPHP\Tests\Factory;


use ElegantPHP\Factory\Builder;

class BaseFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstance() {
        $one = Builder::getInstance("ElegantPHP\\Tests\\Factory\\RouterOne");
        $two = Builder::getInstance("ElegantPHP\\Tests\\Factory\\RouterTwo");
        $this->assertNotNull($one, 'Must return a valid instance');
        $this->assertNotNull($two, 'Must return a valid instance');
        $this->assertFalse($one === $two, 'BaseFactory must return two different instances');
    }

}