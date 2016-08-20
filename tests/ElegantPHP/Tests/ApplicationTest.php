<?php
/**
 * Created by PhpStorm.
 * User: geral
 * Date: 20/08/2016
 * Time: 19:40
 */

namespace ElegantPHP\Tests;


use ElegantPHP\Factory\Builder;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    private $application;

    protected function setUp()
    {
        $this->application = Builder::getInstance("ElegantPHP\\Application");
    }


    public function testRun()
    {
        $this->assertNotNull($this->application);
    }

}