<?php 

require_once "conexion.php";

class ModelCategorias{

    static public function MdlMostrarCategorias($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        
        $stmt->execute();

        return $stmt->fetchAll(); 
        
        $stmt = null;

    }

}

?>