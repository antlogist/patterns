<?php

include_once('Interfaces/HeaderInterface.php');

class DarkHeader implements HeaderInterface
{
    public function render()
    {
        echo 'Dark header rendering</br>';
    }
}
