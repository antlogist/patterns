<?php

class DebitCard
{
    public $cardNumber = '';

    public function __clone()
    {
        $this->cardNumber = '';
    }
}
