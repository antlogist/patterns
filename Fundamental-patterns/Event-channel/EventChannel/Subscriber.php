<?php

include_once('Interfaces/SubscriberInterface.php');;

class Subscriber implements SubscriberInterface
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        $msg = "{$this->getName()} notified: [{$data}] </br>";
        echo $msg;
    }

    public function getName()
    {
        return $this->name;
    }
}
