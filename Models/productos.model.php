<?php 

class ModelProductos{
    static public function MdlMostrarProductosPorCategoria($tabla, $item, $valor){
        
        if($item == null || $valor == null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE estado = 1");
            $stmt->execute();
            return $stmt->fetchAll(); 
            $stmt = null;
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND estado = 1");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(); 
            $stmt = null;
        }

       
    }
}

?>