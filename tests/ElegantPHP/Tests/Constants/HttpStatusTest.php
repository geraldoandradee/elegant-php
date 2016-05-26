<?php

namespace ElegantPHP\Tests\Constants;


use ElegantPHP\Constants\HttpStatus;

class HttpStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testMessage() {
        $h = new HttpStatus(200);
        $this->assertEquals('OK', $h->getMessage(), 'Message must be "OK"');

        $h->setCode(301);
        $this->assertEquals('OK', $h->getMessage(), 'Message must be "OK"');
        $this->assertEquals('Moved Permanently', $h->getMessageCode(), 'Message must be "Moved Permanently"');
    }
}
