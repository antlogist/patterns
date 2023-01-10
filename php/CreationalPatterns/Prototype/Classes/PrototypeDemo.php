<?php

include_once('Classes/Client.php');
include_once('Classes/Order.php');

class PrototypeDemo
{
    public function run()
    {
        $client = new Client(1, 'Anton');

        $deliveryDate = new DateTime('2022-12-15 20:00:00');

        $order = new Order(23, $deliveryDate, $client);

        $client->addOrder($order);

        $cloneOrder = clone $order;

        $cloneOrder->addDay();

        return [$order, $cloneOrder, $client];
    }
}
