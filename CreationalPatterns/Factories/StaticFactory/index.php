<?php
include_once('Controllers/DispatcherController.php');

$dispatcher = new DispatcherController;

$dispatcher->submitTransport('truck');
$dispatcher->submitTransport('van');
$dispatcher->submitTransport('truck');
