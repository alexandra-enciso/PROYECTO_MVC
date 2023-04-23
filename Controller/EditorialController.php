<?php
require_once(dirname(__DIR__)."/Models/EditorialModels.php");
require_once(dirname(__DIR__)."/Config/database.php");
class EditorialController{

    private $codigo;
     private $nombre;
    private $opcion;
    
    public function __construct($codigo,$nombre,$opc){

    $this->codigo = $codigo;
    $this->nombre = $nombre;
    
    if($codigo!= ""){
         $this->guardar();
    }
            
    
    }
    public function index(){
        $editorial = new EditorialModels();
        $data["editoriales"]= $editorial->get_editoriales();

        return $data;    
        
       //require_once "../Views/pages/IndexEditorial.php";
        
    }

    public function guardar(){
            $editorial = new EditorialModels();
            $editorial->insertar($this->codigo, $this->nombre);
            require_once (dirname(__DIR__)."/Views/pages/AgregarEditorial.php");
            //$this->index();
        }
        public function eliminar($id){
            $editorial = new EditorialModels();
            $r = $editorial->delete_editorial($id);
            require_once dirname(__DIR__)."./Views/pages/AgregarEditorial.php";
        }
public function editar($codigoEditorial, $nombre){
            $editorial = new EditorialModels();
            $r = $editorial ->editar_editorial($codigoEditorial, $nombre);
            require_once (dirname(__DIR__)."./Views/pages/AgregarEditorial.php");
            $this->index();
        }
        
        public function editorial($codigoEditorial){
            $codigoEditorial = new EditorialModels();
            $data["editorial"] = $codigoEditorial->get_infoEditorial($codigoEditorial);
            
            return $data;
        }
}
?>
