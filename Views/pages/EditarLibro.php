<?php
require_once(dirname(__DIR__). "./layout/header.php");
require_once(dirname(__DIR__). "../../Controller/LibroController.php");
?>

  <center></form>
         
    <h1>Editar Libro</h1>
    <?php
        $id = $_GET['id'];
        $info = new LibroController("","","","","","","");
        $data = $info->libro($id);
        foreach ($data["libro"] as $dato) {
        ?>

    <div class="centrar">
    <div class="container fondo">
        <center><h1>Agregar Libro</h1></center>
    <form name="AgregarLibros"method= "POST" action="../../Controller/indexController.php "> 
    <div class="form-floating mb-3">
              
                <ul>
                    
                        <label for="codigoLibro"><h5>Código Libro:</h5>  </label>
                        <input type="text" id="codigo" name="codigoLibro" value="">
                    <br>
                    <br>
                    
                        <label for="titulo"><h5> Título:</h5> </label>
                        <input type="text" id="titulo" name="titulo" value="">
                    <br>
                    <br>
                    
                        <label for="isbn"><h5>ISBN:</h5></label>
                        <input type="text" id="isbn" name="isbn" value="">
                    <br>
                    <br>
                    
                        <label for="paginas"><h5>Páginas:</h5></label>
                        <input type="text" id="paginas" name="paginas" value="">
                    <br>
                    <br>
                    
                        <label for="localizacion"><h5>Localización:</h5> </label>
                        <input type="text" id="localizacion" name="localizacion" value="">
                        <input type="hidden" name="controller" value="libro">
                    <br>
                    <br>
                    
                   <center><button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                   <button type="reset" class="btn btn-outline-secondary">Limpiar</button></center> 

</form> <br></center>
    
   </div>
 <?php } ?>
    
   

<?php
require_once(dirname(__DIR__)."./layout/footer.php");
?>