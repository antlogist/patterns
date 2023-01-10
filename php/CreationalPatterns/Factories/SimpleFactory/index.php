<?php

include_once('Controllers/FeedController.php');

$feed = new FeedController;

$feed->feedProduction('fattening')->getDescription();
$feed->feedProduction('rearing')->getDescription();
