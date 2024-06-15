$(document).on("click", ".bntEditarCategoria", function(){

    
});

$(document).on("click", ".btnEliminarCategoria", function(){
    idUsuario = $(this).attr("idUsuario");
   

    Swal.fire({
        title: "¿Está seguro de borrar la categoría?",
        text: "Si no lo está puede cancelar la accíon!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, borra la categoría!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.value) {
            window.location = "index.php?ruta=categorias&idUsuario="+idUsuario;
        }
      });
});