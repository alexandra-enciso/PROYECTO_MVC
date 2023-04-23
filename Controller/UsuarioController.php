<?php
require_once(dirname(__DIR__)."./Models/UsuarioModels.php");
require_once(dirname(__DIR__)."./Config/database.php");

    class UsuarioController{

        private $codigoUsuario;
        private $nombre;
        private $telefono;
        private $direccion;
        
        public function __construct($codigoUsuario, $nombre, $telefono, $direccion){
            $this->codigoUsuario = $codigoUsuario;
            $this->nombre = $nombre; 
            $this->telefono = $telefono;
            $this->direccion = $direccion;
            if($codigoUsuario!=""){ //preguntar
                //$this->guardar();
               
            }
             }         
        

        public function index(){
        $usuario = new UsuarioModels();
        $data["usuario"] = $usuario->get_Usuario();
        //require_once "./Views/pages/AgregarUsuario.php";
        return $data;
        }


        public function usuario($codigoUsuario){
            $usuario = new UsuarioModels();
            $data["usuario"] = $usuario->get_infoUsuario($codigoUsuario);
            
            return $data;
        }
       public function CodigoUsuario(){
        $usuario = new UsuarioModels();
        $data["usuario"] = $usuario->get_usuario();
        return $data;
       }

        public function guardar(){
           // $codautor = $_POST['codigo'];
           // $nomautor = $_POST['nombre'];

            $usuario = new UsuarioModels();
            $usuario->insertar ($this->codigoUsuario, $this->nombre, $this->telefono, $this->direccion);
            //require_once "../Views/page/indexAutor.php"; //Funciona $this->paginas
            $this->actualizar($this->codigoUsuario);
            require_once (dirname(__DIR__)."./Views/pages/indexUsuario.php");
            //$this->index();
        }

        public function actualizar($codigoUsuario){
            $usuario = new UsuarioModels();
            $r = $usuario->update_usuario($codigoUsuario);
            
        }
        
        public function editar($id){
            $libro = new UsuarioModels();
            $r = $usuario->editar_usuario($id);
            require_once (dirname(__DIR__)."./Views/page/indexUsuario.php");
            //$this->index();

        }

        public function eliminar($id){
            $usuario = new UsuarioModels();
            //$r = $editorial->delete_editorial($id);
            $r = $usuario->delete_Usuario($id);
            require_once (dirname(__DIR__)."./Views/pages/indexUsuario.php");
            //$this->index();
        }
    }
?>