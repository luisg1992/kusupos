<?php 

class ControllerProductos{

    static public function ctrMostrarProductosPorCategoria($item, $valor){

        $tabla = "productos";
        $respuesta = ModelProductos::MdlMostrarProductosPorCategoria($tabla, $item, $valor);
        return $respuesta;

    }

}

?>