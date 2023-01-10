<?php

include_once('Classes/Client.php');

class Order
{
    public $id;

    public $deliveryDate;

    private $client;

    public function __construct($id, $deliveryDate, Client $client)
    {
        $this->id = $id;

        $this->deliveryDate = $deliveryDate;

        $this->client = $client;
    }

    public function addDay()
    {
        $this->deliveryDate->modify('+1 day');
    }

    public function __clone()
    {
        $this->id = $this->id . 'c';
        $this->deliveryDate = clone $this->deliveryDate;
        $this->client->addOrder($this);
    }
}
