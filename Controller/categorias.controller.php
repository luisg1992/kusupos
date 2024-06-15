<?php 

class ControllerCategorias{
    
    static public function ctrMostrarCategorias($item, $valor){

        $tabla = "categorias";
        
        $respuesta = ModelCategorias::MdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;

    }
}

?>