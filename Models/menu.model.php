<?php 

class ModelMenu{
    
    static public function MdlConstruirMenuPorPerfilCabecera($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY orden");

        $stmt->execute();

        return $stmt -> fetchAll();

        $stmt = null;

    }

    static public function MdlConstruirMenuPorPerfilDetalle($tabla, $item, $valor){

        if($item == null && $valor == null){
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY orden");

            $stmt->execute();

            return $stmt -> fetchAll();

            $stmt = null;


        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY orden");

            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt -> fetchAll();

            $stmt = null;


        }

        
    }

}

?>