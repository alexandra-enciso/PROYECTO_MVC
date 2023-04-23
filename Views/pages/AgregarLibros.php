<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__). "../../Controller/LibroController.php");
?>

<div class="centrar">
    <div class="container fondo">
        <center><h2>Agregar Libros</h2></center>
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
    
    <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                <th>Código libro</th>
                <th>Titulo</th>
                <th>ISBN</th>
                <th>paginas</th>
                <th>Localizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
             </thead>
        <tbody>
            <?php
            $info = new LibroController("", "", "", "", "","","");
            $data = $info->index();
            foreach ($data["libro"] as $dato) {

               ?>
                <tr>
                <td><?=$dato["codigoLibro"] ?></td>
                <td><?=$dato["titulo"] ?></td>
                <td><?=$dato["isbn"]?></td>
                <td><?=$dato["paginas"]?></td>
                <td><?=$dato["localizacion"]?></td>

                <th><a href="/Views/pages/EditarLibro.php?id=" $dato ["codigoLibro"]?><button class="btn btn-success">Editar</button></a></th>
                <th><a href="/Views/pages/EliminarLibro.php?id=" $dato ["codigoLibro"]?><button class="btn btn-danger">Eliminar</button></a></th>
                
               
         <?php
           
                                   

            }  ?>
        </tbody>
    </table>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>