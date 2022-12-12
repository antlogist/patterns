<?php

include_once('Multiton.php');

echo Multiton::getInstance('numberOne')->randNumber . '</br>';
echo Multiton::getInstance('numberTwo')->randNumber . '</br>';
echo Multiton::getInstance('numberOne')->randNumber . '</br>';
echo Multiton::getInstance('numberTwo')->randNumber . '</br>';
