<?php 

class ControllerVentas{

    static public function ctrListarVentas(){ 

        $tabla = "Ventas";
        $item = null;
        $valor = null;

        $respuesta = ModelVentas::MdlListarVentas($tabla, $item, $valor);
        return $respuesta;
    }
}

?>