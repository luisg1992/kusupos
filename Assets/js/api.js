function busquedaRuc(e){
    var key=e.keyCode || e.which;
  if (key==13){

    var ruc = $('#nuevoRuc').val();

    var datos = new FormData();
    datos.append("ruc", ruc);

    $.ajax({

        url: "Apis/consultaRuc.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            var data = $.parseJSON(respuesta);
            console.log(data);
            $('#nuevoProveedor').val(data["razonSocial"]);
            $('#nuevaDireccion').val(data["direccion"]);
            
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }

    });
  }else{
    console.log("No enter")
  }
}

function busquedaDocumento(e){
  var key=e.keyCode || e.which;
if (key==13){

  var ruc = $('#nuevoDocumento').val();

  var datos = new FormData();
  datos.append("ruc", ruc);

  $.ajax({

      url: "Apis/consultaDocumento.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function(respuesta){
          var data = $.parseJSON(respuesta);
          console.log(data);
          $('#nuevoNombre').val(data["nombres"]);
          $('#nuevoApellidoPaterno').val(data["apellidoPaterno"]);
          $('#nuevoApellidoMaterno').val(data["apellidoMaterno"]);
          
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
          alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      }

  });
}else{
  console.log("No enter")
}
}