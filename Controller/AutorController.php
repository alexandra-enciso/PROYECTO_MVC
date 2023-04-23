<?php
require_once(dirname(__DIR__)."./Models/AutorModels.php");
require_once(dirname(__DIR__)."./Config/database.php");
class AutorController{

    private $codigo;
     private $nombre;
    private $codigoEditorial;
    
    public function __construct($codigo, $nombre){

    $this->codigo = $codigo;
    $this->nombre = $nombre;
     if ($codigo != "") {
            $this->guardar();
        }
        if ($nombre != "") {
            $this->guardar();
          
      }
    }
     public function index(){
            $autor = new AutorModels();
            $data["autor"] = $autor->get_autores();
           
            return $data;
        
    }

    public function autor($codigoAutor){
            $autor = new AutorModels();
            $data["autor"] = $autor->get_infoAutor($codigoAutor);
            
            return $data;
        }

public function guardar(){
           //$codautor = $_POST['codigo'];
           //$codautor = $_POST['nombre'];

            $autor = new AutorModels();
            $autor->insertar($this->codigo,$this->nombre);
            //require_once "../Views/page/indexAutor.php"; //Funciona
            require_once (dirname(__DIR__)."./Views/pages/AgregarAutor.php");
            //$this->index();
        }

        public function eliminar($id){
            $autor = new AutorModels();
            //$r = $editorial->delete_editorial($id);
            $r = $autor->delete_autor($id);
            require_once (dirname(__DIR__)."./Views/pages/AgregarAutor.php");
            //$this->index();
        }

    

public function editar($codigoAutor, $nombre){
            $autor = new AutorModels();
            $r = $autor->editar_autor($codigoAutor, $nombre);
            require_once (dirname(__DIR__)."./Views/pages/AgregarAutor.php");
            $this->index();
        }

}
?>

  