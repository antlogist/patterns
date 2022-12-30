<?php
class Van implements VehicleInterface
{
    public function delivery($weight)
    {
        return 'Van deliveries: ' . $weight . ' tonne';
    }
}
