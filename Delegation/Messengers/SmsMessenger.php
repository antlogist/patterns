<?php
include_once('Messengers/AbstractMessenger.php');

class SmsMessanger extends AbstractMessenger
{
    public function send(): bool
    {
        return parent::send();
    }
}