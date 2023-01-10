<?php

include_once('Interfaces/HeaderInterface.php');

class LightHeader implements HeaderInterface
{
    public function render()
    {
        echo 'Light header rendering</br>';
    }
}
