<?php

include_once('Classes/UserLazyInit.php');

class UserController
{

    private $user = [];

    public function __construct()
    {

        $userInit = new UserLazyInit;

        $this->user['name'] = $userInit->getUser()->name;
        $this->user['profession'] = $userInit->getUser()->profession;
    }

    /**
     * Get user info
     *
     * @return String
     */
    public function getUser(): String
    {
        return $this->user['profession'] . ' ' . $this->user['name'];
    }
}
