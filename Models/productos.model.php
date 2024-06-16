<?php 

class ModelProductos{
    static public function MdlMostrarProductosPorCategoria($tabla, $item, $valor){
        
        if($item == null || $valor == null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll(); 
            $stmt = null;
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(); 
            $stmt = null;
        }

       
    }
}

?>