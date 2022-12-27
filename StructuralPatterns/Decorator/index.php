<?php 

include_once('Controllers/PriceController.php');

$price = new PriceController;

echo $price->renderPrice();
