<?php

namespace ElegantPHP\Tests\Controlllers;

use ElegantPHP\Controllers\BaseController;

class BaseControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Standard base path is
     **/
    public function testLoadView()
    {
        $controller = new BaseController();
        $this->assertEquals("BaseController", $controller->getApp());

        $controller = new ControllerExampleTest();
        $this->assertEquals("ControllerExampleTest", $controller->getApp());

        $controller->setBasePath(realpath('.'));
        $this->assertEquals(realpath('.') . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'ControllerExampleTest' . DIRECTORY_SEPARATOR . 'index.php', $controller->getViewPath('index'));

    }
}
