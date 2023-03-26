<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
	</style>
</head>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
       

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<body>


<div class="container">
	<div class="row">
    <br>
    <a href="inicio" class="float-right">Regresar a inicio</a>

		<div class="col-sm-12">
		<h2>TABLA Plan-Clientes</h2>
		<!-- Button trigger modal -->
    <br>
    <br>
		<!-- <i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>-->
			<div class="table-responsive">	
				<!-- Contenido de la tabla-->
				<table id="example" class="table tablas">
				  <thead>
				    <tr>
              <th scope="col">Código</th>
				      <th scope="col">Código Cliente</th>
				      <th scope="col">Nombre Cliente</th>
				      <th scope="col">Precio</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Opciones</th>
				    </tr>
				  </thead>
				  <tbody>
            <?php
              $plan = ControladorEjercicio04::ctrMostrarEjercicio04();
              //Se recorre
              foreach ($plan as $key => $value){

                //Se alamecenan la data en la variable datos, se utilizará para mandarlo como parámetros
                //está función JS va a mostrar algunos datos de la fila seleccionada en la ventana modalAgregar.
                $datos=$value[0]."||".
                       $value[1]."||".
                       $value[2]."||".
                       $value[3]."||".
                       $value[4];
            ?>
            <tr>
              <!--Se llenan las filas con los datos correspondientes-->
              <td><?php echo $value[0]; ?></td>
              <td><?php echo $value[1]; ?></td>
              <td><?php echo $value[2]; ?></td>
              <td><?php echo $value[3]; ?></td>
              <td><?php echo $value[4]; ?></td>
              <td>
              <button type="button" title="Eliminar plan" class="btn btn-outline-danger " onClick="a(<?php echo $value[0]; ?>)"; idPlan="<?php echo $value[0]; ?>"><i class="bi-trash"></i></button>                   
              <button type="button" title="Agregar otro plan" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalUpdate" onClick="actualizaFormTest('<?php echo $datos ?>')"><i class="bi bi-plus-square"></i></button>
              </td>
            </tr>
            <?php      
              }
            ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>      

<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
  <!-- Modal Agregar -->
  <div class="modal-dialog modal-bg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- Modal Título -->
        <h5 class="modal-title" id="modalAgregarLabel">
          <div class="text-success"><i class="bi bi-pencil-square"></i> Agregar nuevo plan a: 
          <label id="NombreP" name="NombreP"></label>
        </div>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- Modal Body-->
      <div class="modal-body">
        <form name="" method="post">
            <div class="form-group">
                Código:<input name="valorAUpdate" id="valorAUpdate" type="text" class="form-control" >
                Nombre:<input name="valorNombre" id="valorNombre" type="text" class="form-control" >
                <label for="a">Seleccione un plan:</label>
                <select name="valorBUpdate" class="form-select" aria-label="Default select example">             
                <?php
                $test = ControladorEjercicio04::ctrMostrarPlanIndividual();
                //Se recorre
                foreach ($test as $key => $value){

                //Se alamecenan la data en la variable datos, se utilizará para mandarlo como parámetros
                //está función JS va a mostrar los datos de la fila seleccionada en la ventana mmodal
            ?>
                
                <option value="<?php echo$value[0]; ?>"><?php echo $value[1];?></option>
                <?php      
              }
            ?>
                </select>
              </div>
              <hr>
              <button type="button" class="btn btn-danger btn-block" data-bs-dismiss="modal"> Cancelar</button>  
              <input type="submit" class="btn btn-primary btn-block" value="aaaaa">

            <?php
              //Se crea un nuevo objecto, utilizamos la sentencia new para instanciar la clase ControladorTest()
              $ingresarPlan = new ControladorEjercicio04();
              //Se accede por medio del obejeto a la función ctrEditarTest(), ubicada en nuestro controlador                 
              $ingresarPlan -> ctrIngresarPlan();

            ?>
        </form>       
      </div>
      <!-- Fin Modal Título -->
      <!-- Modal Footer-->

    </div>
  </div>
</div>
<!-- Fin Modal Actualizar -->
</body>



<!--Función para buscar de manera dinámica en la tabla-->
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );

</script> 
</html>
	<!-- Borrar clientePlan -->
<?php

  $borrarClientePlan = new ControladorEjercicio04();
  $borrarClientePlan -> ctrBorrarClientePlan();

?>
