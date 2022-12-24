<?php 

class Ingredient implements CompositeItemInterface {
    public function calcPrice(): float
    {
        $price_arr = [1000, 1500, 2000, 3500];
        $this->price = $price_arr[array_rand($price_arr)];
        return $this->price;
    }
}
