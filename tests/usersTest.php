<?php

require_once __DIR__ .'/../src/core/users.php';

class UsersTest extends PHPUnit_Framework_TestCase
{
    protected $user;

    protected function setUp()
    {
        $this->user = new Users();
    }

    public function testGetEmail()
    {
        $this->assertEquals('user1@gmail.com', $this->user->getEmail());
    }
}
