<?php

class Conexion { 
	public static function conectar(){
		try{

			$cn = new PDO("mysqul:host=localhost;dbname=scriptwebDB", "root", "");

			return $cn;

		} catch (Exception $ex) {
			die($ex->getMessage());
		}

	}
}
