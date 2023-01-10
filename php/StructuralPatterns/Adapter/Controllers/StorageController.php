<?php
include_once('Adapters/StorageAdapter.php');

class StorageController
{
    public function adapter()
    {
        $adapter = new StorageAdapter;

        echo $adapter->unloadOnFloor() . '<br>';
        echo $adapter->checkRackSystem() . '<br>';

        return;
    }
}
