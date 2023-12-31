<?php

    class socialmediaModels extends Conectar{
        public function get_SocialMedia(){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "SELECT * FROM socialmedia WHERE estado = 1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); 

           /*  try {
                // Obtener conexión a la base de datos
                $conectar = parent::Conexion();
                parent::set_names();
        
                // Consulta SQL para obtener datos de la tabla socialmedia
                $sql = "SELECT * FROM socialmedia WHERE estado = 1";
                $sql = $conectar->prepare($sql);
                $sql->execute();
        
                // Obtener y retornar resultados como arreglo asociativo
                return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                // Manejar excepciones en caso de errores
                echo "Error: " . $e->getMessage();
                return array(); // Puedes retornar un arreglo vacío u otro valor que indique un error
            } */
        }
    }

?>