$(document).unbind("scroll"); 

$(document).on("click", ".btnAgregarCarrito", function(){
    
    count=1;

    id = $(this).attr('id');
    nombre = $(this).attr('nombre');
    precio = $(this).attr('precio');

    /* LISTADO DE ID'S DE PRODUCTOS AGREGADOS */
    arr=[];
    $("#carrito tr").each(function() {
            arr.push(this.id);

    });

    console.log(arr.includes(this.id));

    console.log(arr);

    /* CALCULAMOS EL ORDEN */

    lastIpunt = $("#carrito").find("tr").last().attr("inp");

    if(lastIpunt==undefined){
        lastIpunt = 1;
    }else{
        lastIpunt++;
    }


    $('#carrito').append('<tr id="'+id+'" inp="'+lastIpunt+'"><th>'+lastIpunt+'</th><td>'+nombre+'</td><td>2</td><td>'+precio+'</td></tr>');

    /*idUsuario = $(this).attr("idUsuario");
   

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
      });*/
});