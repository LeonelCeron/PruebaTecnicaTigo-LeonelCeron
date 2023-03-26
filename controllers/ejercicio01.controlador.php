<?php

class ControladorEjercicio01{

	/*=============================================
				INGRESAR EJERCICIO01
	=============================================*/
	//Se valida si los datos se enviaron en la pagina anterior
	//Si los datos fueron enviados se asignan a otras variables
	static public function ctrIngresarEjercicio01(){
		if(isset($_POST["Nombre"]) ){
            $var= $_POST["Nombre"];
            $var1 = $_POST["Estudios"];
		
            if (empty($var)) {
                echo 'La variable SÍ está vacía, su contenido es: '. $var;
            }
            else{ //Si la variable tiene datos, se muestra una alerta con la información ingresada
                //echo 'La variable NO está vacía, su contenido es: '. $var;

				echo'<script>
				swal({
					type: "success",
					position: "top-end",
					icon: "success",
					title: "Se ha registrado correctame",
                    text: "Nombre: '.$var.', Estudios: '.$var1.'",
					showConfirmButton: true,
					//timer: 2500
					  }).then(function(result){	
								window.location = "ejercicio01";
							})
				</script>';

            }
		}
	}
}
?>