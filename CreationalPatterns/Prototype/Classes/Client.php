<?php

include_once('Classes/Order.php');

class Client
{
    public $id;

    public $name;

    private $orders;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addOrder(Order $order)
    {
        $this->orders[$order->id] = $order;
    }
}
