<?php
include_once('Interfaces/VehicleInterface.php');

class Truck implements VehicleInterface
{
    public function delivery()
    {
        echo 'Cargoo was delivered by TRUCK transport.</br>';
    }
}
