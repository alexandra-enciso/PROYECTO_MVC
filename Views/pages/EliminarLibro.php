<?php
    require_once("../../Controller/LibroController.php");

    $id = $_GET["id"];
    $delete = new LibroController("", "", "","","","","");
    $delete->eliminar($id);
?>