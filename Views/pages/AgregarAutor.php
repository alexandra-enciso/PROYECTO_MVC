<?php
require_once(dirname(__DIR__). "../layout/header.php");
require_once(dirname(__DIR__). "../../Controller/Autorcontroller.php");
?>

  <center></form>
        
    <h1>Agregar Autor</h1>
    <form name="AgregarAutor"method= "POST" action="../../Controller/indexController.php "> 
    <div class="form-floating mb-3">
        <label for= "codigo"><h5>Código Autor:</h5></label> <br> <br>
        <input type="text" name= "codigo" class= "form-control" id="codigo" placeholder= "name@example">
    </div>
        <div class="form-floating mb-3">
        <label for="Título"><h5>Nombre :</h5> </label> <br> <br>
        <input type="text" name= "autor" class= "form-control" id="codigo" placeholder= "name@example"><br>
        <input type="hidden" name="controller"value= "autor">

    </div>
        <button type="submit" name= "guardar" class="btn btn-outline-primary"><h5>Guardar</h5> </button>
        <button type="reset" class="btn btn-outline-secondary"><h5>Limpiar</h5> </button>
       
    
    </form> <br></center>
    
    <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <td>#</td>
                    <td>Nombre de autor</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $info = new AutorController("","","");
                $data = $info->index();
                foreach ($data["autor"] as $dato) 
                { 
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

<?php
require_once(dirname(__DIR__)."../layout/footer.php");
?>