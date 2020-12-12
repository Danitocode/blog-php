<?php

class User{
	private $name;
	private $surname;
	private $email;
	private $password;


	function getName() {
		return $this->name;
	}

	function getSurname() {
		return $this->surname;
	}

	function getEmail() {
		return $this->email;
	}

	function getPassword() {
		return $this->password;
	}

	function setName($name): void {
		$this->name = $name;
	}

	function setSurname($surname): void {
		$this->surname = $surname;
	}

	function setEmail($email): void {
		$this->email = $email;
	}

	function setPassword($password): void {
		$this->password = $password;
	}
	
	public function showAllUsers(){
		echo "Sacando todos los usuarios";
	}

}