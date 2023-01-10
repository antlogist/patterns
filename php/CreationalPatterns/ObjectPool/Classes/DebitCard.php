<?php

class DebitCard implements ObjectInterface
{
    public $cardNumber = '';

    public function __clone()
    {
        $this->cardNumber = '';
    }
}
