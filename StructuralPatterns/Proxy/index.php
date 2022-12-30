<?php 

include_once('Controllers/VehicleController.php');

$vehicle = new VehicleController;
echo $vehicle->delivery(20);


