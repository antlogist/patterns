<?php

include_once('Interfaces/PublisherInterface.php');
include_once('Interfaces/EventChannelInterface.php');

class Publisher implements PublisherInterface
{
    private $category;

    private $eventChannel;

    public function __construct($category, EventChannelInterface $eventChannel)
    {
        $this->category = $category;
        $this->eventChannel = $eventChannel;
    }

    function publish($data)
    {
        $this->eventChannel->publish($this->category, $data);
    }
}
