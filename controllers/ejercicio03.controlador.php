<?php

class ControladorEjercicio03{
	/*=============================================
				MOSTRAR Correo
	=============================================*/
	

	static public function ctrCerrarSesion(){
		if(isset($_POST["CerrarSesion"]) ){
			$datos= $_POST["CerrarSesion"];
			session_destroy();
			echo '<script>
			swal({
				type: "error",
				position: "top-end",
				icon: "success",
				title: "La sesión se cerrará en 3 segundos ",
				text: "Será direccionado a la página de inicio",
				showConfirmButton: false,
				timer: 3000
				  }).then(function(result){

							window.location = "inicio";

							
						})

			</script>';
		}
		
	}


	static public function ctrMostrarCorreo(){
		if(isset($_POST["ClienteCorreo"]) ){
			$datos= $_POST["ClienteCorreo"];
			$respuesta = ModeloCliente::mdlMostrarCorreo($datos);
			//echo $respuesta;
			echo $respuesta->rowCount();
			if($respuesta->rowCount() == 1){
				$row = $respuesta->fetch();
					//echo $row['ClienteCodigo'];
					//echo $row['ClienteCorreo'];
					//echo $row['ClienteNombre'];
					$_SESSION['DatoNombre']= $row['ClienteNombre'];
					$_SESSION['DatoCorreo']= $row['ClienteCorreo'];
					echo '<script>
					swal({
						type: "success",
						position: "top-end",
						icon: "success",
						title: "El correo ingresado existe en la BD",
						showConfirmButton: false,
						timer: 1500
						  }).then(function(result){
		
									window.location = "ejercicio03aux";
		
									
								})
		
					</script>';
			}else{
				echo '<script>
				swal({
					type: "error",
					position: "top-end",
					icon: "success",
					title: "El correo ingresado no existe en la BD",
					text: "No puede acceder a la página de bienvenida",
					showConfirmButton: false,
					timer: 2500
					  }).then(function(result){
	
								window.location = "ejercicio03";
	
								
							})
	
				</script>';

			}

		}
		
	}
	

}
?>