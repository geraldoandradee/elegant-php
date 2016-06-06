<?php

namespace ElegantPHP\Model;

interface UserInterface
{
    public function getEmail();
    public function setEmail($email);
    public function getPassword();
    public function setPassword($password);
    public function getName();
    public function setName($name);
}