<?php 

class Ingredient implements CompositeItemInterface {
    public function calcPrice(): float
    {
        $this->price = array_rand([1000, 1500, 2000, 3500]);
        return $this->price;
    }
}
