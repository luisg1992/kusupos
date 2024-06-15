<?php 

class ControllerUsuarios{
    static public function ctrIngresoUsuario(){
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && 
        preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){
            $tabla = "usuarios";

            $item = "Usuario";
            $valor = $_POST["ingUsuario"];

            $respuesta = ModelUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
            $encriptar = crypt($_POST["ingPassword"], '$2a$07$usesomesillystringforsalt$');

            if($respuesta["Usuario"] == $_POST["ingUsuario"] && $respuesta["Password"]==$encriptar){

                echo "inicio";

                $_SESSION["iniciarSesion"] = "ok";
                $_SESSION["id"] = $respuesta["id"];
                $_SESSION["nombre"] = $respuesta["nombre"];
                $_SESSION["usuario"] = $respuesta["usuario"];
                $_SESSION["foto"] = $respuesta["foto"];
                $_SESSION["perfil"] = $respuesta["perfil"];

                echo '<script>
                    window.location = "inicio"
                </script>';
            }else{
                echo '<br><div class="alert alert-danger">Error al ingresar, vuelva a intentarlo</div>';
            }
        
        }
    }
}

?>