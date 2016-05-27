<?php

namespace ElegantPHP\Factory;


class Builder
{
    protected static $instances = array();

    private function __construct() {}

    final private function __clone() {}

    public static function getInstance($class, $args=array())
    {
        if (!isset(self::$instances[$class])) {
            $reflection = new \ReflectionClass($class);
            self::$instances[$class] = $reflection->newInstanceArgs($args);
        }
        return self::$instances[$class];
    }
}
