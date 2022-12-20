<?php

class Session
{
    //add session
    static function add($name, $value)
    {
        if ($name != "" && !empty($name) && $value != "" && !empty($value)) {
            return $_SESSION[$name] = $value;
        }

        throw new \Exception("Name and value required");
    }

    //get value from session
    static function get($name)
    {
        return $_SESSION[$name];
    }

    //check session
    static function has($name)
    {
        if ($name != "" && !empty($name)) {
            return (isset($_SESSION[$name])) ? true : false;
        }

        throw new \Exception("Name required");
    }

    //remove session
    static function remove($name)
    {
        if (self::has($name)) {
            unset($_SESSION[$name]);
        }
    }
}
