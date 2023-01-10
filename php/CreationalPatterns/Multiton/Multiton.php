<?php

class Multiton
{
    protected static $instances = [];

    private function __construct()
    {
    }

    public static function getInstance(string $instanceName)
    {
        if (isset(static::$instances[$instanceName])) {
            return static::$instances[$instanceName];
        }

        static::$instances[$instanceName] = new static();
        static::$instances[$instanceName]->randNumber = rand();

        return static::$instances[$instanceName];
    }

    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}
