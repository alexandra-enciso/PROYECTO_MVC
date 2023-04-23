 <?php
    class UsuarioModels{

        private $db;
        private $usuario;

        public function __construct(){
            $this->db = Conexion::Conexion();
            $this->usuario = array();
        }

        public function Insertar($codigoUsuario, $nombre, $telefono, $direccion){
            $resultado = $this->db->query("INSERT INTO usuario (codigoUsuario, nombre, telefono, direccion) values('$codigoUsuario', '$nombre', '$telefono','$direccion')");
        }

        public function get_usuario(){
            $sql = "SELECT * FROM usuario";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->usuario[] = $row;
            }
            return $this->usuario;
        }
        public function get_infoUsuario($codigoUsuario){
            $sql = "SELECT * FROM usuario WHERE codigoUsuario = '".$codigoUsuario."'";
            $res = $this->db->query($sql);
            while($row = $res->fetch_assoc()){
                $this->usuario[] = $row;
            }
            return $this->usuario;
        }

        public function delete_usuario($cod){
            $sql = "DELETE FROM usuario WHERE Usuario = '".$cod."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
         //se agrega la funcion de actualizar
        public function editar_usuario($codigoUsuario, $nombre, $telefono, $direccion){
            $sql = "UPDATE usuario SET codigoUsuario = '".$codigoUsuario."', nombre = '".$nombre."', telefono = '".$telefono."', direccion = '".$direccion."'
                    WHERE codigoUsuario = '".$codigoUsuario."'";
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }
    }

?>