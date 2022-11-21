<?php

class Request
{
    //return all requests
    static function all($is_array = false)
    {
        /**
         * When $is_array = true, JSON objects will be returned as associative arrays; 
         * when false, JSON objects will be returned as objects
         */
        $result = [];

        if (count($_GET) > 0) $result["get"] = $_GET;
        if (count($_POST) > 0) $result["post"] = $_POST;
        $result["file"] = $_FILES;

        return json_decode(json_encode($result), $is_array);

        //array(3) {
        //["get"]=>array(1) {["q"]=>string(0) ""}
        //["post"]=>array(1) {["token"]=>string(44) "3MzyIigUnzFVNyAaFzjdG..."}
        //["file"]=>array(0) {}
        //}

    }

    //get specific request type (GET, POST, FILE) result
    static function get($key)
    {
        $object = new static;
        $data = $object->all();
        return $data->$key;
    }

    //check request availability
    static function has($key)
    {
        return (array_key_exists($key, self::all(true))) ? true : false;
    }

    //get request data
    static function old($key, $value)
    {
        $object = new static;
        $data = $object->all();
        return isset($data->$key->$value) ? $data->$key->$value : "";
    }

    //refresh request
    static function refresh()
    {
        $_POST = [];
        $_GET = [];
        $_FILES = [];
    }
}
