<?php

class ObjectPool
{

    private $clones = [];
    private $prototypes = [];

    private static $instance = null;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function addObject(ObjectInterface $obj)
    {

        $key = $obj::class;
        $this->prototypes[$key] = $obj;

        return $this;
    }

    public function getObject($key)
    {
        if ($this->clones[$key]) {
            echo 'Class in work now';
            return false;
        }

        if (!$this->prototypes[$key]) {
            return null;
        }

        $this->clones[$key] = clone $this->prototypes[$key];

        return $this->clones[$key];
    }

    public function release(&$obj)
    {
        $key = $obj::class;
        unset($this->clones[$key]);
        $obj = null;
    }

    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}
