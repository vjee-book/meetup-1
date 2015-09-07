<?php

class Users
{
    private $name;

    private $email;

    public function __construct()
    {
        $this->name = 'user1';
        $this->email = 'user1@gmail.com';
    }

    public function getEmail()
    {
        return $this->email;
    }
}
