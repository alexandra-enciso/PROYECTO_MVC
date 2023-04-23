<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controller/UsuarioController.php");
?>

<center><h1>Usuarios</h1></center> 
<br>
<a href="http://localhost/Views/Pages/AgregarUsuario.php" class="btn btn-primary"> Editar o Eliminar Usuario</a>
<th><a href="http://localhost/Views/Pages/AgregarUsuario.php"><button type="button" class="btn btn-dark">Agregar Usuario</button></a></th>
<br>
<br>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Usuario</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $info = new UsuarioController("", "", "", "",);
            $data = $info->index();
            foreach ($data["usuario"] as $dato) {
                ?>
                <tr>
                <td><?=$dato["codigoUsuario"] ?></td>
                <td><?=$dato["nombre"] ?></td>
                <td><?=$dato["telefono"]?></td>
                <td><?=$dato["direccion"]?></td>
       

                <th><a href="/Views/pages/EditarUsuario.php?id=" $dato ["codigoUsuario"]?><button class="btn btn-success">Editar</button></a></th>
                <th><a href="/Views/pages/EliminarUsuario.php?id=" $dato ["codigoUsuario"]?><button class="btn btn-danger">Eliminar</button></a></th>
                
               
         <?php
          } 
          ?>
          
        
        </tbody>
    </table>
</div>
<?php
include(dirname(__DIR__) . "./layout/footer.php");
?>