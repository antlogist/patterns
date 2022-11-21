<?php
require_once("../Facades/OrderFacade.php");

class OrderController
{

    public function save()
    {
        OrderFacade::save();
    }
}
