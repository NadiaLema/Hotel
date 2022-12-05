<?php

// print_r($_POST);

include "../Model/conexion_bd.php";
$mensaje = null;



$fecha_ingreso = $_POST['fecha_ingreso'];
$fecha_salida  = $_POST['fecha_salida'];
$idhabitacion = $_POST['idhabitacion'];

$buscoFecha ="";


?>