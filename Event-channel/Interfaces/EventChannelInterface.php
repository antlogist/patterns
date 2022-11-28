<?php

include_once('Interfaces/SubscriberInterface.php');

interface EventChannelInterface
{
    public function publish($category, $data);
    public function subscribe($category, SubscriberInterface $subscriber);
}
