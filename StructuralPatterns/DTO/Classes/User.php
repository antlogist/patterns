<?php

class User
{
    private $name;
    private $groups = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function addGroup(Group $group)
    {
        $this->groups = $group;
    }

    public function getGroups()
    {
        return $this->groups;
    }
}
