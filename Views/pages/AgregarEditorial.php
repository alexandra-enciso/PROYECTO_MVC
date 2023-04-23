<?php
require_once(dirname(__DIR__)."../layout/header.php");
require_once(dirname(__DIR__). "../../Controller/Editorialcontroller.php");
?>

  <center></form>
        
    <h1>Agregar Editorial</h1>
    <form name="AgregarEditorial"method= "POST" action="../../Controller/indexController.php "> 
    <div class="form-floating mb-3">
        <label for= "codigo"><h5>Código Editorial:</h5></label> <br>
        <input type="text" name= "codigo" class= "form-control" id="codigo" placeholder= "name@example"><br>
    </div>
        <div class="form-floating mb-3">
        <label for="Título"><h5>Nombre editorial :</h5> </label> <br>
        <input type="text" name= "nombre" class= "form-control" id="nombre" placeholder= "name@example"><br>
        <input type="hidden" name="controller"value= "editorial"><br>

    </div>

        <button type="submit" name= "guardar" class="btn btn-outline-primary"><h5>Guardar</h5> </button>
        <button type="reset" class="btn btn-outline-secondary"><h5>Limpiar</h5> </button>
       
    
    </form> <br></center>

     <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <td>#</td>
                    <td>Nombre de Editorial</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $info = new EditorialController("","","");
                $data = $info->index();
                foreach ($data["editoriales"] as $dato) { ?>
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


<?php
include(dirname(__DIR__)."../layout/footer.php");
?>