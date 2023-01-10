<?php
class User implements ObjectInterface
{
    public $name = '';

    public function __clone()
    {
        $this->name = '';
    }
}
