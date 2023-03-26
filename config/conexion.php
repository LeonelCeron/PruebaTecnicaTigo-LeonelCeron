<?php


//Clase conexión, contiene el metodo conectar que será invocado en la clase modelo
//para realizar consultas a la BD
class Conexion{

	static public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=tigo_prueba_tecnica",
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}
?>