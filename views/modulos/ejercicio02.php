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
                          <strong class="card-title">Ejericio 02</strong>
                      </div>
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center">Ejercicio 02</h3>
                          </div>
                          <hr>
                          <!-- Name Card -->
					                <!-- Se utiliza method Post para el envío de información -->
                            <form name="" method="post">
                                <div class="mb-3">
					                      <!-- Caja de texto para nombre -->
                                <label class="form-label">Nombre:</label>
                                <input type="text" name="Nombre" class="form-control" id="" placeholder="Ingrese su nombre completo" required>
                              </div>
                              <div class="mb-3">
                                <!-- Caja de texto para dirección -->
                                <label class="form-label">Dirección:</label>
                                <input type="text" name="Direccion" class="form-control" id="" placeholder="Ingrese su dirección" required>
                              </div>
                              <!-- CCheckBox ycajas de texto para especialidades -->
                              <div class="mb-3">
                                <div class="form-check">
                                <input class="form-check-input"  name="JamonQueso" type="checkbox" value="" id="check1" onchange="habilitar1(this.checked);">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Jamón y queso
                                </label>
                                </div>
                              </div>
                                <div class="mb-3">
                                <input type="text" name="opc1JamonQueso" class="form-control" id="cantidadJamonQueso" placeholder="Ingrese la cantidad" disabled>
                              </div>
                              <div class="mb-3">
                                <div class="form-check">
                                <input class="form-check-input" name="Napolitana" type="checkbox" value="" id="check2" onchange="habilitar2(this.checked);">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Napolitana
                                </label>
                                </div>
                              </div>
                                <div class="mb-3">
                                <input type="text" name="opc2Napolitana" class="form-control" id="cantidadNapolitana" placeholder="Ingrese la cantidad" disabled>
                              </div>
                              <div class="mb-3">
                                <div class="form-check">
                                <input class="form-check-input" name="Mozzarella" type="checkbox" value="" id="check3" onchange="habilitar3(this.checked);">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Mozarella
                                </label>
                                </div>
                              </div>
                                <div class="mb-3">
                                <input type="text" name="opc3Mozzarella" class="form-control" id="cantidadMozzarella" placeholder="Ingrese la cantidad" disabled required>
                              </div>
                              <div>
                                <input type="submit" class="btn btn-outline-primary">
                                <?php
                                //Se crea un nuevo objecto, utilizamos la sentencia new para instanciar la clase ControladorEjercicio02()
                                $ingresarTest = new ControladorEjercicio02(); 
                                //Se accede por medio del obejeto a la función ctrIngresarEjercicio02(), ubicada en nuestro controlador              
                                $ingresarTest -> ctrIngresarEjercicio02();

                                ?>
                              </div>					
                            </form>
                      </div>
                  </div> <!-- .card -->
              </div>
        </div>
      </div>
              <script type="text/javascript">
                // Funciones para habilitar cajas de texto de cantidades
              function habilitar1(value)
              {
                  if(value==true)
                  {
                      // habilitamos
                      document.getElementById("cantidadJamonQueso").disabled=false;
                  }else if(value==false){
                      // deshabilitamos
                      document.getElementById("cantidadJamonQueso").disabled=true;
                  }
              }
      
      
      
      
              function habilitar2(value)
              {
                  if(value==true)
                  {
                      // habilitamos
                      document.getElementById("cantidadNapolitana").disabled=false;
                  }else if(value==false){
                      // deshabilitamos
                      document.getElementById("cantidadNapolitana").disabled=true;
                  }
              }
      
      
              function habilitar3(value)
              {
                  if(value==true)
                  {
                      // habilitamos
                      document.getElementById("cantidadMozzarella").disabled=false;
                  }else if(value==false){
                      // deshabilitamos
                      document.getElementById("cantidadMozzarella").disabled=true;
                  }
              }
      </script>
</body>
</html>
