<?php

namespace ElegantPHP\Tests\Factory;


class BaseFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateInstance() {
        $one = RouterOne::getInstance();
        $two = RouterTwo::getInstance();
        $this->assertNotNull($one, 'Must return a valid instance');
        $this->assertNotNull($two, 'Must return a valid instance');
        $this->assertFalse($one === $two, 'BaseFactory must return two different instances');
    }

}