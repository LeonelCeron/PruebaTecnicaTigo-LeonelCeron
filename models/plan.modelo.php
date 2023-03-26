<?php

require_once "config/conexion.php";

class ModeloPlan{

	/*=============================================
	MOSTRAR PLAN
	=============================================*/

	static public function mdlMostrarPlan(){

			$stmt = Conexion::conectar()->prepare("SELECT a.ClientePlanId, a.ClienteCodigo, b.ClienteNombre, c.precio, c.PlanDescripcion FROM cliente_plan a INNER JOIN cliente b ON a.ClienteCodigo = b.ClienteCodigo INNER JOIN PLAN c ON a.PlanCodigo = c.PlanCodigo;");

			$stmt -> execute();

			return $stmt -> fetchAll();

		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR PLAN
	=============================================*/

	static public function mdlMostrarPlanIndividual(){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM plan");

		$stmt -> execute();

		return $stmt -> fetchAll();

	

	$stmt -> close();

	$stmt = null;

}




	/*=============================================
	INGRESAR PLAN
	=============================================*/
						 
						 
	static public function mdlIngresarPlan($tabla, $datos){

		$tabla = "cliente_plan";

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ClienteCodigo, PlanCodigo) VALUES (:ClienteCodigo, :PlanCodigo)");

		$stmt->bindParam(":ClienteCodigo", $datos["valorAUpdate"], PDO::PARAM_STR);
		$stmt->bindParam(":PlanCodigo", $datos["valorBUpdate"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	BORRAR CLIENTEPLAN
	=============================================*/

	static public function mdlBorrarClientePlan($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ClientePlanId = :ClientePlanId");

		$stmt -> bindParam(":ClientePlanId", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
}