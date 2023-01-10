<?php

include_once('Interfaces/RackStorageInterface.php');

class RackStorage implements RackStorageInterface
{
    public function unloadOnRack(): string
    {
        return 'Rack stroage';
    }

    public function checkRackSystem()
    {
        return 'Check rack system';
    }
}
