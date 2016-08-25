<?php
/**
 * Created by PhpStorm.
 * User: geral
 * Date: 25/08/2016
 * Time: 00:07
 */

use ElegantPHP\Factory\Builder;
use ElegantPHP\Routers\FastRouter\Route;

$routeCollection = Builder::getInstance("ElegantPHP\\Routers\\FastRouter\\RouteCollection");
$routeCollection->add(new Route('/', 'HomeController::index', 'home', 'GET'));

return $routeCollection;