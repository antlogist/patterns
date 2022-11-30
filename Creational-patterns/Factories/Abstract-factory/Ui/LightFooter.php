<?php

include_once('Interfaces/FooterInterface.php');

class LightFooter implements FooterInterface
{
    public function render()
    {
        echo 'Light footer rendering</br>';
    }
}
