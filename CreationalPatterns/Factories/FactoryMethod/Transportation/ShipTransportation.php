<?php
include_once('Transportation/AbstractTransportation.php');
include_once('Interfaces/VehicleInterface');
include_once('Vehicles/Ship.php');

class ShipTransportation extends AbstractTransportation
{
    
    public function transportSupply($distance, $weight): VehicleInterface
    {
        return new Ship($distance, $weight);
    }
}
