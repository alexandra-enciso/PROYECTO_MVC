<?php
require_once(dirname(__DIR__). "./layout/header.php");
require_once(dirname(__DIR__). "../../Controller/AutorController.php");
?>

  <center></form>
        
    <h1>Editar Autor</h1>
    <?php
        $id = $_GET['id'];
        $info = new AutorController("","","");
        $data = $info->autor($id);
        foreach ($data["autor"] as $dato) {
        ?>

    <form name="AgregarAutor"method= "POST" action="../../Controller/indexController.php "> 
    <div class="form-floating mb-3">
        <label for= "codigo"><h5>Código Autor:</h5></label><br><br>
        <input value="<?php echo  $dato["codigoAutor"]; ?>" type="text" name= "codigo" class= "form-control" id="codigo">
    </div>
        <div class="form-floating mb-3">
        <label for="Título"><h5>Nombre :</h5> </label><br><br>
        <input value="<?php echo $dato["nombreAutor"]; ?>" type="text" name= "nombre" class= "form-control" id="codigo" placeholder= "name@example">
        <input type="hidden" name="controller"value= "autorEditar">

    </div>
    
      
        <button type="submit" name= "guardar" class="btn btn-outline-primary"><h5>Guardar</h5> </button>
        <button type="reset" class="btn btn-outline-secondary"><h5>Limpiar</h5> </button>
       
    
    </form> <br></center>
    <?php } ?>
    
   

<?php
require_once(dirname(__DIR__)."./layout/footer.php");
?>