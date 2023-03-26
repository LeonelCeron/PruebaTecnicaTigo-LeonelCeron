//Agrega los datos para actualizar a la modal Actualizar registro
function actualizaFormTest(datos){
    d=datos.split('||');
    
    $('#valorAUpdate').val(d[1]);
    $('#valorNombre').val(d[2]);
    $('#NombreP').html(val(d[2])); 

}

//Agrega los datos para eliminar la modal 
function eliminaFormTest(datos){
  d=datos.split('||');
  
  $('#valorADelete').val(d[0]);
    
}

/*=============================================
ELIMINAR 
=============================================*/
function a(datos){
  var idPlan = datos;
  swal({
    title: '¿Está seguro de borrar el registro?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, eliminar registro!'
  }).then(function(result){

    if(result.value){
     // alert(idPlan);
      window.location = "index.php?ruta=ejercicio04&idPlan="+idPlan;

    }

  })
}