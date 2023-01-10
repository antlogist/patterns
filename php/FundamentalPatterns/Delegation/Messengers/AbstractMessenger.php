<?php
include_once('Interfaces/MessengerInterface.php');

abstract class AbstractMessenger implements MessengerInterface
{
    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $recipient;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setSender(string $value): MessengerInterface
    {
        $this->sender = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setRecipient(string $value): MessengerInterface
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return MessengerInterface
     */
    public function setMessage(string $value): MessengerInterface
    {
        $this->message = $value;

        return $this;
    }

    /**
     * @return boolean
     */
    public function send(): bool
    {
        return true;
    }
}
