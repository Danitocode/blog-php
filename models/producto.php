<?php

class Producto {

	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $imagen;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}

	function getId() {
		return $this->id;
	}

	function getCategoria_id() {
		return $this->categoria_id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getDescripcion() {
		return $this->descripcion;
	}

	function getPrecio() {
		return $this->precio;
	}

	function getStock() {
		return $this->stock;
	}

	function getOferta() {
		return $this->oferta;
	}

	function getFecha() {
		return $this->fecha;
	}

	function getImagen() {
		return $this->imagen;
	}

	function setId($id): void {
		$this->id = $id;
	}

	function setCategoria_id($categoria_id): void {
		$this->categoria_id = $categoria_id;
	}

	function setNombre($nombre): void {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function setDescripcion($descripcion): void {
		$this->descripcion = $this->db->real_escape_string($descripcion);
	}

	function setPrecio($precio): void {
		$this->precio = $this->db->real_escape_string($precio);
	}

	function setStock($stock): void {
		$this->stock = $this->db->real_escape_string($stock);
	}

	function setOferta($oferta): void {
		$this->oferta = $this->db->real_escape_string($oferta);
	}

	function setFecha($fecha): void {
		$this->fecha = $fecha;
	}

	function setImagen($imagen): void {
		$this->imagen = $imagen;
	}

	public function getAll() {
		$productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
		return $productos;
	}

		public function save(){
		$sql = "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}');";
		
		$save = $this->db->query($sql);
		
		
		
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}

	
}
