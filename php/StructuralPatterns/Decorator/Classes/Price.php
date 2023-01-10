<?php

class Price implements PriceInterface
{

    protected $rate = 1;
    protected $pieces = 100;

    public function calcPrice(): float
    {
        $price = $this->rate * $this->pieces;
        return $price;
    }
}
