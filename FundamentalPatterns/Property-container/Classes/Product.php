<?php

include_once('PropertyContainer/PropertyContainer.php');

class Product extends PropertyContainer
{

    private $title;
    private $price;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPrice()
    {

        return 'USD' . ' ' . number_format($this->price, 2, '.', '');
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
