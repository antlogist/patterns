<?php
include_once('Transportation/TruckTransportation.php');
include_once('Transportation/ShipTransportation.php');

class DeliveryController
{
    private $cost;

    public function getCost($type, $distance, $weight)
    {
        switch ($type) {
            case 'truck':
                $transport = new TruckTransportation($distance, $weight);
                $this->cost = $transport->getCost();
                break;
            case 'ship':
                $transport = new ShipTransportation($distance, $weight);
                $this->cost = $transport->getCost();
        }

        return $this->cost;
    }
}
