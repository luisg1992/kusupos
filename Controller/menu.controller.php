<?php 

class ControllerMenu{

    static public function ctrContruirMenuPorPerfilCabecera($item, $valor){

        $tabla = "menucabecera";

        $respuesta = ModelMenu::MdlConstruirMenuPorPerfilCabecera($tabla, $item, $valor);

        return $respuesta;

    }

    static public function ctrContruirMenuPorPerfilDetalle($item, $valor){

        $tabla = "menusub";

        $respuesta = ModelMenu::MdlConstruirMenuPorPerfilDetalle($tabla, $item, $valor);

        return $respuesta;

    }

}

?>