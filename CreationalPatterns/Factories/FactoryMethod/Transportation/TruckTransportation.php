<?php
include_once('Transportation/AbstractTransportation.php');
include_once('Interfaces/VehicleInterface');
include_once('Vehicles/Truck.php');

class TruckTransportation extends AbstractTransportation
{
    public function transportSupply($distance, $weight): VehicleInterface
    {
        return new Truck($distance, $weight);
    }
}
