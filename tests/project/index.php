<?php
/**
 * Created by PhpStorm.
 * User: geral
 * Date: 20/08/2016
 * Time: 21:16
 */
require_once __DIR__ . "/../../vendor/autoload.php";

use ElegantPHP\Application;

$app = new Application();

try {
    $this->router->init(include_once __DIR__ . '/src/config/routes.php');
    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}