<?php
require_once(dirname(__DIR__). "./layout/header.php");
require_once(dirname(__DIR__). "../../Controller/UsuarioController.php");
?>

  <center></form>
        
    
    <?php
        $id = $_GET['id'];
        $info = new UsuarioController("","","","",);
        $data = $info->usuario($id);
        foreach ($data["usuario"] as $dato) {
        ?>

    <div class="centrar">
    <div class="container fondo">
        <center><h1>Editar Usuario</h1></center>
    <form name="AgregarLibros"method= "POST" action="../../Controller/indexController.php "> 
    <div class="form-floating mb-3">
              
                <ul>
                    
                        <label for="codigoLibro"><h5>Código Usuario:</h5>  </label>
                        <input type="text" id="codigo" name="codigoUsuario" value="">
                    <br>
                    <br>
                    
                        <label for="nombre"><h5> Nombre:</h5> </label>
                        <input type="text" id="nombre" name="nombre" value="">
                    <br>
                    <br>
                    
                        <label for="telefono"><h5>Telefóno:</h5></label>
                        <input type="text" id="telefono" name="telefono" value="">
                    <br>
                    <br>
                    
                        <label for="direccion"><h5>Dirección:</h5></label>
                        <input type="text" id="direccion" name="direccion" value="">
                    <br>
                    
                    
                   <center><button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                   <button type="reset" class="btn btn-outline-secondary">Limpiar</button></center> 

</form> <br></center>
    
   
 <?php } ?>
    
   

<?php
require_once(dirname(__DIR__)."./layout/footer.php");
?>