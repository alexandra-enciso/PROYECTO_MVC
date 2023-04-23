<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controller/AutorController.php");
?>

<center><h1>Autores</h1></center>
<br>

<a href="/Views/pages/AgregarAutor.php" class="btn btn-primary">Editar o Eliminar Autor</a>
<th><a href="http://localhost/Views/Pages/AgregarAutor.php"><button type="button" class="btn btn-dark">Agregar Autor</button></a></th>
<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Autor</th>
                <th>Nombre Autor</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new AutorController("", "", "");
            $data = $info->index();
            foreach ($data["autor"] as $dato) {
                ?>
               <tr>
                        <td><?= $dato['codigoAutor'] ?></td>
                        <td><?= $dato['nombreAutor'] ?></td>
                        
             <th><a href="/Views/pages/EditarAutor.php?id=<?= $dato["codigoAutor"]?>"><button class='btn btn-success'>Editar</button></a></th>
                        <th><a href="/Views/pages/EliminarAutor.php?id=<?= $dato["codigoAutor"] ?>"><button class='btn btn-danger'>Eliminar</button></a></th>
                <?php
                                               
                }
                ?>
        </tbody>
    </table>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>