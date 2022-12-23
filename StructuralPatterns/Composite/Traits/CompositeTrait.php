<?php

trait CompositeTrait {

    private $compositeItems = [];

    public function setChildItem(CompositeItemInterface $item) {
        $this->compositeItems;
    }

    public function calcPrice() {
        if($this->price) {
            return $this->price;
        }

        $this->price = 0;

        foreach($this->compositeItems as $compositeItem) {
            $this->price += $compositeItem->calcPrice();
        }

        return $this->price;
    }
}