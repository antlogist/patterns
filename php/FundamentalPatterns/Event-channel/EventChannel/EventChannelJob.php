<?php
include_once('EventChannel/EventChannel.php');
include_once('EventChannel/Publisher.php');
include_once('EventChannel/Subscriber.php');

class EventChannelJob
{
    public function run()
    {
        // 1. CREATE EVENT CHANNEL INSTANCE
        $notificationChannel     = new EventChannel;

        // 2. CREATE PUBLISHERS
        // Science publisher
        $authorOnePublisher      = new Publisher('science-category', $notificationChannel);

        // IT publishers
        $authorTwoPublisher      = new Publisher('it-category', $notificationChannel);
        $authorThreePublisher    = new Publisher('it-category', $notificationChannel);

        // 3. CREATE SUBSCRIBERS
        $userOneSubscriber       = new Subscriber('user-one');
        $userTwoSubscriber       = new Subscriber('user-two');

        // 4. SUBSCRIBE TO CATEGORIES
        // User one
        $notificationChannel->subscribe('science-category', $userOneSubscriber);
        $notificationChannel->subscribe('it-category', $userOneSubscriber);

        // User two
        $notificationChannel->subscribe('it-category', $userTwoSubscriber);

        // 5. ACTION PUBLISH
        $authorOnePublisher->publish("The Art and Science of Upgrading the Human Being");
        $authorTwoPublisher->publish("Do you really know what’s inside your iOS and Android apps?");
        $authorThreePublisher->publish("How many jobs are available in technology in the US?");
    }
}
