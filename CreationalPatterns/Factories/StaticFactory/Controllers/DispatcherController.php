<?php
include_once('Factories/VehicleFactory.php');

class DispatcherController
{
    public function submitTransport($type)
    {
        VehicleFactory::build($type)->delivery();
    }
}
