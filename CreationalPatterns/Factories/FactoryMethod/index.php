<?php

include_once('Controllers/DeliveryController.php');

$transportation = new DeliveryController();
echo $transportation->getCost('truck', 100, 20) . '</br>';
echo $transportation->getCost('ship', 100, 20) . '</br>';
