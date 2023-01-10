<?php
class Truck implements VehicleInterface
{
    public function delivery($weight)
    {
        return 'Truck deliveries: ' . $weight . ' tonne';
    }
}
