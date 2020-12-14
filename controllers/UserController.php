<?php

class UserController{
	public function index(){
		echo "Controlador usuarios, Acción index";
	}
	public function register(){
		require_once 'views/users/register.php';
	}

	public function save() {
		if(isset($_POST)){
			var_dump($_POST);
		}
	}
}
