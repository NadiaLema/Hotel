<?php
include "../Model/conexion.php";
    print_r($_POST);

       $id = ($_GET["id"]);

        $sentencia = $bd->prepare("DELETE FROM habitacion WHERE idhabitacion = ?;");
        $resultado = $sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: ../habitacion.php');
    }






?>