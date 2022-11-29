<?php

interface MessengerInterface
{
    /**
     * Function that sets sender
     * 
     * @param String $value
     * @return MessengerInterface
     */
    public function setSender(String $value): MessengerInterface;

    /**
     * Function that sets recipient
     *
     * @param String $value
     * @return MessengerInterface
     */
    public function setRecipient(String $value): MessengerInterface;

    /**
     * Function that sets message
     *
     * @param String $value
     * @return MessengerInterface
     */
    public function setMessage(String $value): MessengerInterface;

    /**
     * Sending message function
     *
     * @return boolean
     */
    public function send(): bool;
}
