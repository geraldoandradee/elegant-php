<?php

namespace ElegantPHP\Tests\Constants;


use ElegantPHP\Constants\HttpStatus;

class HttpStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testMessage() {
        $h = new HttpStatus(200);
        $this->assertEquals(200, $h->getCode(), 'It must be 200');
        $this->assertEquals('OK', HttpStatus::getMessageFromCode(200), 'It must be OK');
        $this->assertEquals('OK', $h->getMessage(), 'Message must be "OK"');

        $h->setCode(301);
        $this->assertEquals(301, $h->getCode(), 'It must be 301');
        $this->assertEquals('OK', $h->getMessage(), 'Message must be "OK"');
        $this->assertEquals('Moved Permanently', $h->getMessageCode(), 'Message must be "Moved Permanently"');
    }
}
