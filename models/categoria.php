<?php

class Categoria{
	private $id;
	private $nombre;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function setId($id): void {
		$this->id = $id;
	}

	function setNombre($nombre): void {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	public function getAll() {
		$categorias = $this->db->query("SELECT * FROM categorias;");
		return $categorias;
	}
	
	public function save(){
		$sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
}