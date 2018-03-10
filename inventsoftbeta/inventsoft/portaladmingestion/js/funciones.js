$(document).on('click', '.ajax-request', function(event) {//No tiene nombre es una funcion anonima
  event.preventDefault();
  var raiz = './vistas'; //Homologa la ubicacion de todas las vistas
  var ruta = raiz + $(this).attr("href"); //Raiz , Elemento que dispara , Direccion de quien este disparando el evento

  $("#contenido").load(ruta, function(responseTxt, statusTxt, xhr) { //Respuesta \estado del html devuelve un error \ ?
    if (statusTxt == "error") {
      swal({//Es un plugin que cambia el alert para que sea mas bonito
        title: "<small>¡Error!</small>",
        text: "Error al intentar cargar el recurso:" + ruta,
        html: true,//Para que el elemento se cargue como html
        confirmButtonText: "Cerrar",
      });
    }
  })

});
