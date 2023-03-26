<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<body>
<div class="container">
  <!-- Content here -->
  <div class="row">
  <br>
    <a href="inicio" class="float-right">Regresar a inicio</a>
        <div class="col-lg-6">
            <br>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Ejericio 03</strong>
                </div>
                <div class="card-body">
                	<div class="card-title">
                        <h3 class="text-center">Ejercicio 03</h3>
                    </div>
                    <hr>
                    <!-- Name Card -->					
                    <!-- Se utiliza method Post para el envío de información -->

                    <form name="" method="post">
                      <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Ingresar correos de la tabla cliente, ej: juan@gmail.com</label>
                        <br>
                    <label for="exampleFormControlInput1" class="form-label">Ingrese el correo de la persona:</label>
                    <input type="mail" name="ClienteCorreo" class="form-control" id="ClienteCorreo" placeholder="Ingrese su correo" required>
                  </div>
                  <div class="mb-3">
                    <br>
                    <div>
                      <input type="submit" class="btn btn-primary float-right" value="Consultar si el correo existe "> 
                      
                      <?php 
                      //Se accede por medio del obejeto a la función ctrMostrarCorreo(), ubicada en nuestro controlador, para validar si el correo existe
                      $ejercicio03 = ControladorEjercicio03::ctrMostrarCorreo();
                      
                      ?>
                      
                    </div>
                  </div>
                    </form>
                </div>
            </div> <!-- .card -->
		</div>
  </div>
</div>
</body>
</html>

