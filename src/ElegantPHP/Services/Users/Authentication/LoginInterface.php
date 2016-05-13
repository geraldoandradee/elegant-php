<?php
/**
 * Created by PhpStorm.
 * User: geral
 * Date: 13/05/2016
 * Time: 02:51
 */

namespace ElegantPHP\Services\Users\Authentication;


interface LoginInterface
{

    public function login($email, $password);
    public function logout();

}