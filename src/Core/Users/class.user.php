<?php

namespace Meetup\Login\Core;

use Meetup\Login\Core\Users\UserInterface

Class User extends UserInterface{

	public function __construct($email, $password){
		$this->setEmail($email);
		$this->setPassword($password);
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function checkPassword(){
		$sql = "SELECT firstName,lastName,createdAt FROM user WHERE $email='".$this->email."' AND password='".$this->password."' ";
		$query = mysql_query($sql);
		return mysql_fetch_row($query);
	}
		
	public function setFirstName($firstName){
		$this->firstName = $firstName;
	}
	
	public function getFirstName(){
		return $this->firstName;
	}
	
	public function setLastName($lastName){
		$this->lastName = $lastName;
	}
	
	public function getLastName(){
		return $this->lastName;
	}
	
    public function getCreatedAt(){
		return $this->createdAt;
	}

    public function setCreatedAt($createdTime){
		$this->createdAt = $createdTime;
	}

	public function setUpdatedAt($datetime){
		$this->updatedTime = $dateTime;
	}
	
    public function getUpdatedAt(){
		return $this->updatedTime;
	}
    
}
$email 	= $_GET['email'];
$password	= $_GET['password'];
$User = new User($email, $password);
$details = $User->checkPassword();
$User->setFirstName($details['firstName']);
$User->setLastName($details['lastName']);
$User->setCreatedAt($details['createdAt']);
$User->setUpdatedAt(date("Y-m-d H:i:s"));
?>
