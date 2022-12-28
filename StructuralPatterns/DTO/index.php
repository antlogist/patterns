<?php

include_once('Controllers/UserController.php');

$user = new UserController;

echo $user->getName();
