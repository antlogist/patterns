<?php 
include_once('App/AppMessenger.php');

/**
 * Controller for sending message
 */
class MessengerController {

    /**
     * Function for calling the class using delegation pattern
     *
     * @return void
     */
    public function delegation() {
        $item = new AppMessenger;

        $item->setSender('sender@gmail.com')
             ->setRecipient('recipient@gmail.com')
             ->setMessage('Email messenger')
             ->send();

        $item->toSms()
             ->setSender('8-900-123-45-67')
             ->setRecipient('8-900-123-45-67')
             ->setMessage('SMS messenger')
             ->send();

        return 'Message has been sent';
    }

}
