<?php
require_once(dirname(__DIR__). "/layout/header.php");
require_once(dirname(__DIR__). "../../controller/EditorialController.php");
?>

<center><H1>Editoriales</H1></center>
<br>
<a href="AgregarEditorial.php" class="btn btn-primary"> Editar o Eliminar Editorial</a>
 <th><a href="http://localhost/Views/Pages/AgregarEditorial.php"><button type="button" class="btn btn-dark">Agregar Editorial</button></a></th>

<br>
 <br>
 <div class="tabla-responsive">
    <table border="1"width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Editorial</th>
                <th>Nombre Editorial</th>
                <th>Editar</th>
                <th>Eliminar</th>                  

            </tr>
        </thead>
        <tbody>
            <?php
            $info = new EditorialController("","","");
            $data = $info->index();
            foreach ($data ["editoriales"]as $dato){
                ?>
                    <tr>
                        <td><?= $dato['codigoEditorial'] ?></td>
                        <td><?= $dato['nombreEditorial'] ?></td>
                        
             <th><a href="/Views/pages/EditarEditorial.php?id=<?= $dato["codigoEditorial"]?>"><button class='btn btn-success'>Editar</button></a></th>
                        <th><a href="/Views/pages/EliminarEditorial.php?id=<?= $dato["codigoEditorial"] ?>"><button class='btn btn-danger'>Eliminar</button></a></th>
                <?php


            }
            ?>
            
        </tbody>

    </table>

 </div>



<?php
include(dirname(__DIR__)."./layout/footer.php");
?>