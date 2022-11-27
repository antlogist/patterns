<?php

include_once('Controllers/MessengerController.php');

$messenger = new MessengerController;
echo $messenger->delegation();