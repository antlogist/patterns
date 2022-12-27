<?php
include_once('Interfaces/PriceInterface.php');
include_once('Classes/Price.php');
include_once('Classes/PriceEur.php');

class PriceController
{
    public function renderPrice()
    {

        $decorator = new PriceEur(new Price);
        $price = round($decorator->calcPrice(), 2);
        return $price . ' eur';
    }
}
