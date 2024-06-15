/* SUBIENDO FOTO DEL USUARIO */
$(".nuevaFoto").change(function(){

    var image = this.files[0];

    /* VALIDAMOS EL FORMATO SEA JPG O PNG */
    if(image["type"] != "image/jpeg" && image["type"] != "image/png"){
        $(".nuevaFoto").val("");

        Swal.fire({
            title: "Error al subir la imagen",
            text: "¡La imagen debe estar en formato JPG o PNG",
            icon: "error",
            confirmButtonText: "¡Cerrar!"
        })
    }else if(image["size"] > 2000000){

        Swal.fire({
            title: "Error al subir la imagen",
            text: "¡La imagen no debe pesar más de 2MB",
            icon: "error",
            confirmButtonText: "¡Cerrar!"
        })
    }else{
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(image);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);

        });
    }

});

/* EDITAR USUARIO */
$(document).on("click", ".bntEditarUsuario", function(){
//$(".bntEditarUsuario").click(function(){

    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").val(respuesta["perfil"]);
            $("#passwordActual").val(respuesta["password"]);
            $("#fotoActual").val(respuesta["foto"]);

            if(respuesta["foto"] != ""  && respuesta["foto"] != null){
                $(".previsualizar").attr("src", respuesta["foto"]);
            }
        }

    });

});

/* ACTIVAR USUARIO */
$(document).on("click", ".btnActivar", function(){
//$(".btnActivar").click(function(){
    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");

    var datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({

        url: "Ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            if(window.matchMedia("(max-width:767px)").matches){
                Swal.fire({
                    icon: "success",
                    title: "El usuario ha sido actualizado",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                }).then((result)=>{
                    if(result.value){
                        window.location = "usuarios";
                    }
                });
            }
        }
    });
    
    if (estadoUsuario == 0) {
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoUsuario',1);
    }else{
        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoUsuario',0);
    }
});

/* REVISAR SI EL USUARIO YA ESTA REGISTRADO */
$("#nuevoUsuario").change(function(){

    $(".alert").remove();

    var usuario = $(this).val();

    var datos = new FormData();
    datos.append("validarUsuario", usuario);

    $.ajax({
        url: "Ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            if(respuesta){
                var usuarioErroneo = $("#nuevoUsuario").val();
                $("#nuevoUsuario").parent().after('<br class="alert"><div class="alert alert-warning">El usuario "'+usuarioErroneo+'" ya existe en la base de datos</div>');

                $("#nuevoUsuario").val("");
            }
        }
    });
});

/* ELIMINAR USUARIO */
$(document).on("click", ".btnEliminarUsuario", function(){
//$(".btnEliminarUsuario").click(function(){

    idUsuario = $(this).attr("idUsuario");
    fotoUsuario = $(this).attr("fotoUsuario");
    usuario = $(this).attr("usuario");

    Swal.fire({
        title: "¿Está seguro de borrar el usuario?",
        text: "Si no lo está puede cancelar la accíon!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, borra el usuario!",
        cancelButtonText: "Cancelar"
      }).then((result) => {
        if (result.value) {
            window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario+"&fotoUsuario="+fotoUsuario+"&usuario="+usuario;
        }
      });
});