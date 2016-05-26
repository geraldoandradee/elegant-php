<?php
//
//namespace ElegantPHP\Tests\Routers;
//
//use ElegantPHP\Routers\FastRouter\FastRouter;
//
//
//class FastRouterTest extends \PHPUnit_Framework_TestCase
//{
//    private $router;
//    private $uri;
//    private $queryString;
//    private $emptyQueryString;
//    private $oneParamQueryString;
//
//    /**
//     *
//     */
//    public function setUp()
//    {
//        $this->router = FastRouter::getInstance();
//        $this->uri = '/geraldo/andrade';
//        $this->queryString = 'teste=geraldo&coisa=teste';
//        $this->oneParamQueryString = 't=g';
//        $this->emptyQueryString = '';
//    }
//
//    public function testRootRoute()
//    {
//        echo "";
//    }
//
//    public function testGetParams()
//    {
//        $this->router->init($this->uri, $this->emptyQueryString);
//        $this->assertNull($this->router->getParams(), 'Precisa retornar NULL');
//        $this->router->init($this->uri, $this->queryString);
//        $this->assertTrue(is_array($this->router->getParams()), 'Get params must return a array based on query string params');
//        $this->assertEquals('geraldo', $this->router->get('teste'), 'Get param teste must return geraldo');
//        $this->assertEquals('teste', $this->router->get('coisa'), 'Get param coisa must return teste');
//        $this->assertEquals(null, $this->router->get('not_exists'), 'Get param not_exists must return null');
//
//        $this->router->init($this->uri, $this->oneParamQueryString);
//        $this->assertEquals('g', $this->router->get('t'), 'Get param t must return g');
//        $this->assertNull($this->router->get('coisa'), 'After initiation all params must be reseted');
//        $this->router->set('uma', 'coisa');
//        $this->assertEquals('coisa', $this->router->get('uma'), 'Get must return coisa');
//    }
//
//    public function testGetController()
//    {
////        $this->router->init($this->uri, $this->queryString, 'ControllerExampleTest');
////        $this->assertNotNull($this->router->getController(), 'Controller instance must not be null');
////        $this->assertTrue($this->router->getController() instanceof \ElegantPHP\Controllers\ControllerExampleTest);
//    }
//}