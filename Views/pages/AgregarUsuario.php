<?php
require_once(dirname(__DIR__). "../layout/header.php");
require_once(dirname(__DIR__). "../../Controller/UsuarioController.php");
?>

  <center></form>
        
    <h1>Agregar Usuario</h1>
    <form name="AgregarUsuario"method= "POST" action="../../Controller/indexController.php "> 
    <div class="form-floating mb-3">
        <label for= "codigo"><h5>Código Usuario:</h5></label> <br> <br>
        <input type="text" name= "codigo" class= "form-control" id="codigo" placeholder= "name@example">
    </div>
    <div class="form-floating mb-3">
        <label for="nombre"><h5>Nombre :</h5> </label> <br> <br>
        <input type="text" name= "usuario" class= "form-control" id="codigo" placeholder= "name@example"><br>
        <input type="hidden" name="controller"value= "usuario">

    </div>

    </div>
        <div class="form-floating mb-3">
        <label for="Título"><h5>Telefono :</h5> </label> <br> <br>
        <input type="text" name= "usuario" class= "form-control" id="codigo" placeholder= "name@example"><br>
        <input type="hidden" name="controller"value= "usuario">

    </div>

    </div>
        <div class="form-floating mb-3">
        <label for="Título"><h5>Dirección :</h5> </label> <br> <br>
        <input type="text" name= "autor" class= "form-control" id="codigo" placeholder= "name@example"><br>
        <input type="hidden" name="controller"value= "usuario">

    </div>
        <button type="submit" name= "guardar" class="btn btn-outline-primary"><h5>Guardar</h5> </button>
        <button type="reset" class="btn btn-outline-secondary"><h5>Limpiar</h5> </button>
       
    
    </form> <br></center>
    
    <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <td>#</td>
                    <td>Nombre de Usuario</td>
                    <td>Teléfono</td>
                    <td>Dirección</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $info = new UsuarioController("","","","");
                $data = $info->index();
                foreach ($data["usuario"] as $dato) 
                { 
                    ?>
                    <tr>
                        <td><?= $dato['codigoUsuario'] ?></td>
                        <td><?= $dato['nombre'] ?></td>
                        <td><?= $dato['telefono'] ?></td>
                        <td><?= $dato['direccion'] ?></td>


                        
             <th><a href="/Views/pages/EditarUsuario.php?id=<?= $dato["codigoUsuario"]?>"><button class='btn btn-success'>Editar</button></a></th>
                        <th><a href="/Views/pages/EliminarUsuario.php?id=<?= $dato["codigoUsuario"] ?>"><button class='btn btn-danger'>Eliminar</button></a></th>
                <?php
                                               
                }
                ?>
            </tbody>
    </table>

<?php
require_once(dirname(__DIR__)."../layout/footer.php");
?>