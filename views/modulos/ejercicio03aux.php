<?php
session_start();
//Valida si existen la variables de sesión
if (isset($_SESSION['DatoCorreo']) && isset($_SESSION['DatoNombre'])){
  //si existen muestra lo siguiente
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
  <h1 class="display-2">Bienvenido a la página de inicio</h1>
  </div>

  <div class="col-lg-6">
            <br>
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Bienvenido/a</strong>
                </div>
                <div class="card-body">
                	<div class="card-title">
                        <h3 class="text-center">Sus datos son:</h3>
                    </div>
                    <hr> 
                    <br>
                    <label for="exampleFormControlInput1" class="form-label"><strong>Nombre:</strong></label>
                    <label for="exampleFormControlInput1" class="form-label"><?php echo $_SESSION['DatoNombre']; ?> </label>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label"><strong>Correo:</strong></label>
                    <label for="exampleFormControlInput1" class="form-label"><?php echo $_SESSION['DatoCorreo'];?></label>
                    <br>

                    <!-- Name Card -->
      				<form name="" method="post" >
              <input name="CerrarSesion" type="submit" class="btn btn-danger float-right" value="Cerrar sesión"> 
                
                <?php 
                $correo = ControladorEjercicio03::ctrCerrarSesion();
                
                ?>

      				</form>     
              <br>
              <hr>               
              <img src="https://www.millicom.com/media/3545/tigologo.png" class="img-thumbnail" width="200" heigth="00" alt="a">  

                </div>
            </div> <!-- .card -->
</div>
</body>
</html>


<?php

}else{
?>
<?php

  //.....  

}
?>