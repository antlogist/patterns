<?php
include_once('Messengers/AbstractMessenger.php');

class EmailMessanger extends AbstractMessenger
{
    public function send(): bool
    {
        return parent::send();
    }
}
