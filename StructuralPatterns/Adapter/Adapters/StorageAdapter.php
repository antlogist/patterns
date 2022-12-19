<?php

include_once('Interfaces/FloorStorageInterface.php');
include_once('Classes/RackStorage.php');

class StorageAdapter implements FloorStorageInterface
{

    private $adapterObject;

    public function __construct()
    {
        $this->adapterObject = new RackStorage;
    }

    public function unloadOnFloor(): string
    {
        return $this->adapterObject->unloadOnRack();
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->adapterObject, $name)) {
            return call_user_func_array([$this->adapterObject, $name], $arguments);
        } else {
            throw new \Exception('Could not find {$name} function');
        }
    }
}
