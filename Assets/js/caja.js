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

    /* CALCULAMOS EL ORDEN */

    lastIpunt = $("#carrito").find("tr").last().attr("inp");
    list = lastIpunt;

    if(lastIpunt==undefined){
        lastIpunt = 1;
    }else{
        lastIpunt++;    
    }

    if(arr.includes(this.id)){

        elem = $("#carrito").find("#"+this.id);
        cantidad = parseInt(elem.find("#cant").text()) + 1;
        precio = parseInt(elem.find("#precio").attr("precio")) + (parseInt(elem.find("#precio").attr("precio")/(cantidad-1)));
        console.log(cantidad);
        elem.html('<th>'+list+'</th><td>'+nombre+'</td><td id="cant">'+cantidad+'</td><td id="precio" precio="'+precio+'">S/.'+precio+'.00</td>');
    }else{
        $('#carrito').append('<tr id="'+id+'" inp="'+lastIpunt+'"><th>'+lastIpunt+'</th><td>'+nombre+'</td><td id="cant">1</td><td id="precio" precio="'+precio+'">S/.'+precio+'.00</td></tr>');
    }

    $("#carrito tr>td #precio").each(function() {
        console.log(this);
    });



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