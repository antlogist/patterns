<?php

include_once('Models/Product.php');
include_once('Models/Category.php');
include_once('Interfaces/WidgetRealizatonInterface.php');
include_once('Classes/WidgetAbstract.php');
include_once('Classes/WidgetBigAbstract.php');
include_once('Classes/WidgetMiddleAbstract.php');
include_once('Classes/ProductWidgetRealization.php');
include_once('Classes/CategoryWidgetRealization.php');
include_once('Classes/BridgeDemo.php');

class WidgetController
{
    public function Bridge()
    {
        (new BridgeDemo)->run();
    }
}
