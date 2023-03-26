<?php

require_once "config/conexion.php";

class ModeloCliente{

	/*=============================================
	MOSTRAR CLiente
	=============================================*/

	static public function mdlMostrarCorreo($datos){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM cliente WHERE ClienteCorreo = :ClienteCorreo");
		$stmt->bindParam(":ClienteCorreo", $datos, PDO::PARAM_STR);
		$stmt->execute();

		//stmt -> execute();

		return $stmt;

	}
}



