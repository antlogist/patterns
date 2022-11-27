<?php
include_once('Interfaces/MessengerInterface.php');
include_once('Messengers/EmailMessenger.php');
include_once('Messengers/SmsMessenger.php');

/**
 * Delegation pattern example
 */

class AppMessenger implements MessengerInterface {

    /**
     * @var object
     */
    private $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail()
    {
        $this->messenger = new EmailMessanger;

        return $this;
    }

    public function toSms()
    {
        $this->messenger = new SmsMessanger;
        
        return $this;
    }

    public function setSender(string $value): MessengerInterface
    {
        $this->messenger->setSender($value);

        return $this;
    }

    public function setRecipient(string $value): MessengerInterface
    {
        $this->messenger->setRecipient($value);

        return $this;
    }

    public function setMessage(string $value): MessengerInterface
    {
        $this->messenger->setMessage($value);

        return $this;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}
