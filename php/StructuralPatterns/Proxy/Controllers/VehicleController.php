<?php

include_once('Interfaces/VehicleInterface.php');
include_once('Classes/VehicleProxy.php');
include_once('Classes/Van.php');
include_once('Classes/Truck.php');

class VehicleController {

    public function delivery($weight) {
        $vehicle = new VehicleProxy;
        return $vehicle->delivery($weight);
    }

}
