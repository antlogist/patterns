<?php

class PriceEur implements PriceInterface
{

    protected $object;
    protected $rate = 75;

    public function __construct(PriceInterface $object)
    {
        $this->object = $object;
    }

    public function calcPrice(): float
    {
        $priceRur = $this->object->calcPrice();
        $priceEur = $priceRur / $this->rate;
        return $priceEur;
    }
}
