<?php

    class lenguajesModels extends Conectar{
        public function get_Lenguajes(){                                    
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_lenguajes WHERE est = 1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); 

          
        }
    }

?>