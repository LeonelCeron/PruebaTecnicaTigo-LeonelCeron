<?php

class ControladorPlantilla{

	static public function ctrPlantilla(){
		//Se invoca al archivo plantilla que contiene los script y css correspondientes
		//plantilla.php es que redireccionará en base a nuestras peticiones
		include "views/plantilla.php";

	}	


}