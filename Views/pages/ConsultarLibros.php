<?php
require_once(dirname(__DIR__) . "../layout/header.php");
require_once(dirname(__DIR__) . "../../Controller/PrestamoController.php");
?>
<div class="centrar">
  <div class="container fondo">
   <center><h1>Libros Prestados</h1> <br></center> 
    <div class="row">


      <div class="table-responsive-md">
        <table border="" class="table table table-striped-columns table table-hover">
          <thead>
            <tr>
              <td><h5>Código Prestamo</h5> </td>
              <td><h5> Código Ejemplar</h5></td>
              <td><h5>Título</h5></td>
              <td><h5>Localización</h5></td>
              <td><h5>Código Usuario</h5></td>
              <td><h5>Nombre</h5></td>
              <td><h5>Dirección</h5></td>
              <td><h5>Télefono</h5></td>
              <td><h5>Fecha Préstamo</h5></td>
              <td><h5>Fecha Devolución</h5></td>
            </tr>
            <?php
            //Se consulta libros de acuerdo a la cantidad de ejemplares disponibles
            $info = new PrestamoController("", "", "", "");
            $data = $info->prestados();
            foreach ($data["prestamo"] as $dato) {
            ?>
              <tr>
                <td><?php echo $dato['codigoPrestamo'] ?></td>
                <td><?php echo $dato['codigoEjemplar'] ?></td>
                <td><?php echo $dato['titulo'] ?></td>
                <td><?php echo $dato['localizacion'] ?></td>
                <td><?php echo $dato['codigoUsuario'] ?></td>
                <td><?php echo $dato['nombre'] ?></td>
                <td><?php echo $dato['direccion'] ?></td>
                <td><?php echo $dato['telefono'] ?></td>
                <td><?php echo $dato['fechaPres'] ?></td>
                <td><?php echo $dato['fechaDev'] ?></td>
              </tr>
            <?php
            }
            ?>

        </table>
      </div>
    </div>
  </div>
  <?php
  include(dirname(__DIR__) . "../layout/footer.php");
  ?>