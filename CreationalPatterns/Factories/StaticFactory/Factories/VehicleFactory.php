<?php
include_once('Interfaces/VehicleInterface.php');
include_once('Vehicles/Van.php');
include_once('Vehicles/Truck.php');

class VehicleFactory
{
    public static function build(string $type): VehicleInterface
    {
        switch ($type) {
            case 'van':
                return new Van;
            case 'truck':
                return new Truck;
        }
    }
}
