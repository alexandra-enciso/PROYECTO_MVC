<?php
    class EditorialModels{

        private $db;
        private $editorial;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->editorial = array();
        }

        public function insertar($codigo, $nombre){
            $resultado = $this->db->query("INSERT INTO editorial (codigoAutor, nombreAutor, codigoEditorial) values('$codigo', '$nombre')");
        }  

        public function get_editoriales(){
            $sql = "SELECT * FROM editorial";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }


        public function get_infoEditorial($codigoEditorial){
            $sql = "SELECT * FROM editorial WHERE codigoEditorial = '".$codigoEditorial."'";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }
        public function delete_editorial($cod){
            $sql = "DELETE FROM editorial WHERE codigoEditorial=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
   

public function editar_editorial($codigoEditorial, $nombre){
            $sql = "UPDATE editorial SET nombreEditorial = '".$nombre."' WHERE codigoEditorial = '".$codigoEditorial."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }

    }
    }

?>