<?php

include_once('Interfaces/VehicleInterfaces.php');
include_once('Transportation/ShipTransportation.php');
include_once('Transportation/TruckTransportation.php');

abstract class AbstractTransportation
{
    private $distance;
    private $weight;

    public function __construct($distance, $weight)
    {
        $this->distance = $distance;
        $this->weight = $weight;
    }

    public function getCost()
    {
        $vehicle = $this->transportSupply($this->distance, $this->weight);
        $cost = $vehicle->getTransportationCost();
        return $cost;
    }

    abstract function transportSupply($distnace, $weight): VehicleInterface;
}
