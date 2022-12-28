<?php

include_once('Classes/Group.php');
include_once('Classes/User.php');
include_once('DTO/UserDTO.php');

class UserController
{
    public function getName()
    {
        $user = new User();
        $user->setName('Anthony');
        $user->addGroup(new Group('Authors'));
        $user->addGroup(new Group('Editors'));

        $dto = new UserDTO($user);

        $name = $dto->getName();
        return $name;
    }
}
