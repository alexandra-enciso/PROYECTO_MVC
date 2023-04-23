<?php
    require_once("../../Controller/EditorialController.php");

    $id = $_GET["id"];
    $delete = new EditorialController("", "", "");
    $delete->eliminar($id);
?>