<?php

class ControladorEjercicio02{

	/*=============================================
				INGRESAR EJERCICIO02
	=============================================*/
	//Se valida si los datos se enviaron en la pagina anterior
	//Si los datos fueron enviados se asignan a otras variables
	static public function ctrIngresarEjercicio02(){
		if(isset($_POST["Nombre"]) ){//En este caso solamente validamos un campo, pero se sabe que los demás campos están en el mismo formulario
            $jamonqueso = 0;
            $napolitana = 0;
            $mozzarella = 0;
			//Se asignan a variables todos los datos que se ingresaron en el formulario 
            $Nombre= $_POST["Nombre"];
            $Direccion = $_POST["Direccion"];
            $jamonqueso = $_POST["opc1JamonQueso"];
            $napolitana = $_POST["opc2Napolitana"];
            $mozzarella = $_POST["opc3Mozzarella"];

			date_default_timezone_set("America/El_Salvador");
			$fechaActual = date('d-m-Y H:i:s');
   
			
			//Se crea el archivo en caso de no existir
			$nombreArchivo = "datos.txt";
			//Se sobreescribe el archivo
			$archivo = fopen($nombreArchivo, "a");
			//Se manda la informacion que deseamos guardar
			fwrite($archivo, " *** Pedido de PIZZA *** \n Fecha: $fechaActual \n Nombre : $Nombre \n Dirección: $Direccion \n Jampon con queso: $jamonqueso \n Napolitana: $napolitana \n Mozzarella $mozzarella \n ...................................................... \n \n");
			fclose($archivo);
            if (empty($Nombre)) {
                echo 'La variable SÍ está vacía, su contenido es: '. $Nombre;
            }
            else{
                //echo 'La variable NO está vacía, su contenido es: '. $Nombre;

				echo'<script>
				swal({
					type: "success",
					position: "top-end",
					icon: "success",
					title: "Se ha registrado correctame",
                    text: "El pedido se ha realizado con éxito",
					showConfirmButton: false,
					timer: 2000
					  }).then(function(result){	
								window.location = "ejercicio02";
							})
				</script>';

            }
		}
	}
}
?>