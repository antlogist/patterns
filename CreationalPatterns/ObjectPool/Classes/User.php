<?php

class User
{
    public $name = '';

    public function __clone()
    {
        $this->name = '';
    }
}
