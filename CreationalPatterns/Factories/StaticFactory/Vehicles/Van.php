<?php
include_once('Interfaces/VehicleInterface.php');

class Van implements VehicleInterface
{
    public function delivery()
    {
        echo 'Cargoo was delivered by VAN transport.</br>';
    }
}
