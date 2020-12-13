<?php

class connect{
	public static function connect(){
		$db = new mysqli('localhost', )	;
		$db->query("DET NAMES 'utf8'");
		return $db;
	}
}