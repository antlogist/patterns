<?php

class VehicleProxy implements VehicleInterface
{
    private $vehicle;

    public function delivery($weight)
    {
        switch (true) {
            case $weight <= 3:
                $this->vehicle = new Van;
                return $this->vehicle->delivery($weight);
            case $weight > 3:
                $this->vehicle = new Truck;
                return $this->vehicle->delivery($weight);
        }
    }
}
