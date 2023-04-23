<?php
require_once(dirname(__DIR__) . "./layout/header.php");
require_once(dirname(__DIR__) . "../../Controller/LibroController.php");
?>
<div class="centrar">
    <div class="container fondo">
       <center><h1>Prestar Libros</h1> <br></center> 
        <div class="row">
            <form name="PrestarLibros" id="PrestarLibros" accept-charset="UTF-8" action="../../Controllers/indexController.php" method="post">
                <ul>
                    
                        <label for="codigoEjemplar"><h5> Libro - Localización:</h5></label>
                    
                        <select name="codigoEjemplar" id="codigoEjemplar" required="required">
                            <option value="" selected="selected" disabled="disabled">--- Seleccionar ---</option>
                            <?php
                            $info = new LibroController("", "", "", "", "","","");
                            $data = $info->ejemplares();
                            foreach ($data["libro"] as $dato) {
                                echo '<option value="'. $dato["codigoEjemplar"] .'" > '. $dato["titulo"] .' - '.$dato["localizacion"].' </option>';
                            }
                            ?>
                        </select>
                    <br>
                    <br>
                    
                        <label for="codigoUsuario"><h5>Código Usuario:</h5> </label>
                        <input type="text" id="codigoUsuario" name="codigoUsuario" value="" required="required">
                    <br>
                    <br>
                    
                        <label for="fechaPrestamo"><h5>Fecha Préstamo:</h5> </label>
                        <input type="date" id="fechaPrestamo" name="fechaPrestamo" value="" required="required">
                    <br>
                    <br>
                    
                        <label for="fechaDevolucion"> <h5>Fecha Devolución:</h5> </label>
                        <input type="date" id="fechaDevolucion" name="fechaDevolucion" value="" required="required">
                        <input type="hidden" name="controller" value="prestamo">
                    <br>
                    <br>
                   <center> <button type="submit" name="guardar" class="btn btn-outline-primary">Guardar</button>
                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button></center>
                </ul>
            </form>
        </div>
    </div>
</div>
<?php
include(dirname(__DIR__) . "/layout/footer.php");
?>