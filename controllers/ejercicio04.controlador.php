<?php

class ControladorEjercicio04{
	/*=============================================
				MOSTRAR PLANES
	=============================================*/
	
	static public function ctrMostrarEjercicio04(){

		$respuesta = ModeloPlan::mdlMostrarPlan();

		return $respuesta;
	}

	static public function ctrMostrarPlanIndividual(){

		$respuesta = ModeloPlan::mdlMostrarPlanIndividual();

		return $respuesta;
	}

	/*=============================================
				INGRESAR PLAN
	=============================================*/
	static public function ctrIngresarPlan(){
		if(isset($_POST["valorAUpdate"]) ){
			$tabla = "cliente_plan";
			$datos = array("valorAUpdate"=>$_POST["valorAUpdate"],
							   "valorBUpdate"=>$_POST["valorBUpdate"]);

			$respuesta = ModeloPlan::mdlIngresarPlan($tabla,$datos);
			
			if($respuesta == "ok"){
				echo'<script>
				swal({
					type: "success",
					position: "top-end",
					icon: "success",
					title: "Se ha registrado correctame",
					text: "El plan se ha agregado con éxito",
					showConfirmButton: false,
					timer: 1500
					  }).then(function(result){
								window.location = "ejercicio04";

							})
	
				</script>';
	
			}

		}

	}

	/*=============================================
				BORRAR 
	=============================================*/
	static public function ctrBorrarClientePlan(){
		if(isset($_GET["idPlan"])){

			$tabla ="cliente_plan";
			$datos = $_GET["idPlan"];
			$respuesta = ModeloPlan::mdlBorrarClientePlan($tabla, $datos);

			if($respuesta == "ok"){
				echo'<script>
					swal({
						  type: "success",
						  title: "El registro ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {
									window.location = "ejercicio04";
									}
								})

					</script>';
			}
		}
		
	}


}
?>