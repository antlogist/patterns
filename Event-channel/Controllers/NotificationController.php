<?php 

include_once ('EventChannel/EventChannelJob.php');

class NotificationController {

    function __construct()
    {
        $job = new EventChannelJob;
        $job->run();
    }
    
}
