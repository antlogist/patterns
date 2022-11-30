<?php

include_once('Interfaces/FooterInterface.php');

class DarkFooter implements FooterInterface
{
    public function render()
    {
        echo 'Dark footer rendering</br>';
    }
}
