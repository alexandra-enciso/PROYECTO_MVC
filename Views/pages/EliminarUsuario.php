<?php
    require_once("../../Controller/UsuarioController.php");

    $id = $_GET["id"];
    $delete = new UsuarioController("", "", "","");
    $delete->eliminar($id);
?>