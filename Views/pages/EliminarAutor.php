<?php
    require_once("../../Controller/AutorController.php");

    $id = $_GET["id"];
    $delete = new AutorController("", "", "");
    $delete->eliminar($id);
?>