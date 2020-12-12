<?php

class UserController{

	public function showAllUsers(){
		require_once 'models/User.php';
		$user = new User();

		$allUsers = $user->showAllUsers();
		require_once 'views/users/showAllUsers.php';
	}
	
	public function createUser(){
		
	}
}