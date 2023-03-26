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
                    <strong class="card-title">Ejericio 01</strong>
                </div>
                <div class="card-body">
                	<div class="card-title">
                        <h3 class="text-center">Ejercicio 01</h3>
                    </div>
                    <hr>
                    <!-- Name Card -->						  
					<!-- Se utiliza method Post para el envío de información -->
      				<form name="" method="post">
      					<div class="mb-3">
						  <!-- Campo de texto para nombre de la persona -->
						  <label for="exampleFormControlInput1" class="form-label">Nombre de la persona</label>
						  <input type="text" name="Nombre" class="form-control" id="" placeholder="Ingrese su nombre completo" required>
						</div>
						<div class="mb-3">
						  <!-- RadioButton para seleccionar tipo de estudios -->
						 	<label for="exampleFormControlTextarea1" class="form-label">Seleccione una opción</label>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="Estudios" id="exampleRadios1" value="No poseo estudios" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    No poseo estudios
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="Estudios" id="exampleRadios2" value="Estudios primarios">
							  <label class="form-check-label" for="exampleRadios2">
							    Estudios primarios
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="Estudios" id="exampleRadios3" value="Estudios secundarios">
							  <label class="form-check-label" for="exampleRadios3">
							    Estudios secundarios
							  </label>
							</div>
                            <br>
							<div>						  
								<!-- Se manda la información por medio del submit-->
                                <input type="submit" class="btn btn-primary float-right" value="Registrar">
                                <?php
                                //Se crea un nuevo objecto, utilizamos la sentencia new para instanciar la clase ControladorEjercicio01()
                                $ingresarTest = new ControladorEjercicio01();
                                                    
                                //Se accede por medio del obejeto a la función ctrIngresarEjercicio01(), ubicada en nuestro controlador              
                                $ingresarTest -> ctrIngresarEjercicio01();

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
