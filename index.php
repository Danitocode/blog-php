<?php

require 'autoload.php';

if(isset($_GET['controller'])){
	$controllerName = $GET['controller'].'Controller';
}else{
	echo"La pagina que buscas no existe";
	exit();
}

if(class_exists($controllerName)){
	$controller = new $controllerName();

	if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
		$action = $_GET['action'];
		$controller->$action();
	}else{
		echo 'La pagina que buscas no existe';
	}

}else{
	echo "La pagina que buscas no existe";
}