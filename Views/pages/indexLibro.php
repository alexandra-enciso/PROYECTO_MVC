<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controller/LibroController.php");
?>

<center><h1>Libros</h1></center> 
<br>
<a href="http://localhost/Views/Pages/AgregarLibros.php" class="btn btn-primary"> Editar o Eliminar Libro</a>
<th><a href="http://localhost/Views/Pages/AgregarLibros.php"><button type="button" class="btn btn-dark">Agregar Libro</button></a></th>
<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
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
          } 
          ?>
          
        
        </tbody>
    </table>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>