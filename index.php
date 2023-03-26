<?php
    //Se invocan todos los controladores que contienen los metodos que llaman a la funciones del Modelo
    require_once "controllers/plantilla.controlador.php";	
    require_once "controllers/ejercicio01.controlador.php";			 
    require_once "controllers/ejercicio02.controlador.php";	
    require_once "controllers/ejercicio03.controlador.php";			 
    require_once "controllers/ejercicio04.controlador.php";			 

    //Se incovavoca el modelo que contiene las fucniones que manda data a la BD

    require_once "models/plan.modelo.php";
    require_once "models/cliente.modelo.php";



    //Se crea un nuevo objecto, utilizamos la sentencia new para instanciar la clase ControladorPlantilla()
    $plantilla = new ControladorPlantilla();
    //Se accede por medio del obejeto a la función ctrPlantilla(), ubicada en nuestro controlador controllers/test.controlador              
    $plantilla -> ctrPlantilla();


?>