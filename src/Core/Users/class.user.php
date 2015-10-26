<?php

namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface;

Class User implements UserInterface {

    public function __construct($email, $password) {
        $this->setEmail($email);
        $this->setPassword($password);
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function checkPassword() {
        $sql = "SELECT * FROM user WHERE email='" . $this->email . "' AND password='" . $this->password . "' ";
        $query = mysql_query($sql);
        if (mysql_num_rows() > 0)
            return mysql_fetch_row($query);
        else
            return false;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getId() {
        $sql = "SELECT id FROM user WHERE email='" . $this->email . "' ";
        $query = mysql_query($sql);
        if (mysql_num_rows() > 0)
            return mysql_fetch_row($query);
        else
            return false;
    }

    public function getCreatedAt() {
        $sql = "SELECT id FROM user WHERE email='" . $this->email . "' ";
        $query = mysql_query($sql);
        if (mysql_num_rows() > 0)
            return mysql_fetch_row($query);
        else
            return false;
    }

    public function setCreatedAt($userId) {
        $sql = "UPDATE user SET created_at=NOW() WHERE id='" . $userId . "' ";
        $query = mysql_query($sql);
    }

    public function getUpdatedAt() {
        $sql = "SELECT updated_at FROM user WHERE email='" . $this->email . "' ";
        $query = mysql_query($sql);
        if (mysql_num_rows() > 0)
            return mysql_fetch_row($query);
        else
            return false;
    }

    public function setUpdatedAt($userId) {
        $sql = "UPDATE user SET updated_at=NOW() WHERE id='" . $userId . "' ";
        $query = mysql_query($sql);
    }

}

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$user = new User($email, $password);
$userDetails = $user->checkPassword();
$user->setFirstName($userDetails['firstName']);
$user->setLastName($userDetails['firstName']);
$userId = $user->getId();
$user->setCreatedAt($userId);
$user->setUpdatedAt($userId);
$lastLogin = $user->getUpdatedAt();
$userCreated = $user->getCreatedAt();
?>
