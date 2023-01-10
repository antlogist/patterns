<?php

class UserDTO
{
    public function __construct(User $user)
    {
        $this->name = $user->getName();
    }

    public function getName()
    {
        return $this->name;
    }
}
