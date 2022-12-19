<?php

include_once('Interfaces/FloorStorageIntreface.php');

class FloorStorage implements FloorStorageInterface
{
    public function unloadOnFloor(): String
    {
        return 'Floor stroage';
    }
}
