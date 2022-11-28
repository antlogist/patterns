<?php

include_once('Interfaces/EventChannelInterface.php');
include_once('Interfaces/SubscriberInterface.php');

class EventChannel implements EventChannelInterface
{
    private $categories = [];

    public function subscribe($category, SubscriberInterface $subscriber)
    {
        $this->categories[$category][] = $subscriber;
        $msg = "{$subscriber->getName()} subscribed to [{$category}] </br>";
        echo $msg;
    }

    public function publish($category, $data)
    {
        if (empty($this->categories[$category])) {
            return;
        }

        foreach($this->categories[$category] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}
