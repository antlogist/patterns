<?php

include_once('Classes/PrototypeDemo.php');

$prototype = new PrototypeDemo;

$demo = $prototype->run();

echo '<pre>';
var_dump($demo);
echo '</pre>';
