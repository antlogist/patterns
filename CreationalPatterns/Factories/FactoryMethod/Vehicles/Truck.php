<?php

include_once('Interfaces/VehicleInterface.php');

class Truck implements VehicleInterface
{
    private $transportationCost;
    private $distance;
    private $weight;

    public function __construct($distance, $weight)
    {
        $this->distance = $distance;
        $this->weight = $weight;
    }

    public function getTransportationCost()
    {
        $this->calculateTransportationCost();
        return $this->transportationCost;
    }

    public function calculateTransportationCost()
    {
        $costTonKm = 1000;
        $tonKm = $this->distance * $this->weight;
        $cost = $tonKm * $costTonKm;
        $extraCharge = 10;
        $this->transportationCost = $cost + $cost / 100 * $extraCharge;
    }
}
