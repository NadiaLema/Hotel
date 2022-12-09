<?php

error_reporting(1);
include "Model/conexion.php";
$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombreH'];
$descripcion = $_POST['descripcionH'];
$imagen = addcslashes(file_get_contents($_FILES['imagen']['tmp_name']));       

$bd = "UPDATE habitacion SET 
nombre ='nombre',
nombre ='nombre',
nombre ='nombre',
nombre ='nombre'";

$resultado = $conexion->query($bd);
if($resultado){
    header('Location: index.php');
}else{
    echo "No se insertaron los datos";
}

?>