<?php 

class ModelVentas{

    static public function MdlListarVentas($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll(); 
        $stmt = null;

    }

}

?>