<?php
/**
 * Created by PhpStorm.
 * User: geral
 * Date: 24/08/2016
 * Time: 22:35
 */

namespace project\src\Controllers;


use ElegantPHP\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index() {
        $this->loadView('index', array());
    }
}