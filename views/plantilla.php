<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Bootstrap iconos -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<!-- bootstap de manera local -->
	<link href="views/components/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="views/components/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- jQuery -->
	<script src="plugins/jquery/jquery-3.5.1.min.js"></script>

	<!-- jquery-validation -->
	<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="plugins/jquery-validation/additional-methods.min.js"></script>

  	<!-- SweetAlert 2 -->
	<script src="plugins/sweetalert2/sweetalert2.all.js"></script>

    <!-- Load Validation JS -->		
	<script src="plugins/js/funciones.js"></script>       

<body>
	<?php

	    /*=============================================
	   					CONTENIDO
	    =============================================*/
		
	    if(isset($_GET["ruta"])){
			//Valida si existe alguna ruta dentro del GET y si es así redirecciona en base al nombre de la ruta
			//agregando .php al final del nombre de la ruta.
			if($_GET["ruta"] == "inicio" ||
				$_GET["ruta"] == "ejercicio01" ||
				$_GET["ruta"] == "ejercicio02" ||
				$_GET["ruta"] == "ejercicio03" ||
				$_GET["ruta"] == "ejercicio03aux" ||
				$_GET["ruta"] == "ejercicio04" ||
				$_GET["ruta"] == "salir"){
				
				include "modulos/".$_GET["ruta"].".php";

	      }else{
			//pa página 404 no está creada.
	        include "modulos/404.php";

	      }

	    }else{
			//Si no existe va a redireccionar a nuestro inicio

	      include "modulos/inicio.php";

	    }
    ?>
</body>
</html>