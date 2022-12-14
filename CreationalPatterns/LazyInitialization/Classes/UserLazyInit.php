<?php

include_once('Classes/User.php');

class UserLazyInit
{
    private $user = null;

    public function getUser()
    {
        if(is_null($this->user)) {
            $this->user = new User;
        }

        return $this->user;
    }
}
