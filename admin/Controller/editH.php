<?php


include "../Model/conexion.php";
$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
//$img = addcslashes(file_get_contents($_FILES['img']['tmp_name']));       
$precio = $_POST['precio'];
//consulta
$sentencia = $bd->query("UPDATE habitacion SET nombre = ?, descripcion = ?, precio = ? WHERE idhabitacion = ?");
/*
 $sentencia = $bd->prepare("UPDATE habitacion SET 
 nombre = ? ,
 descripcion = '$descripcion',
 img = '$imagen',
 precio = '$precio' WHERE idhabitacion = $id ");
 */
 $resultado = $mysqli->query($sentencia);

if($resultado){
    header('Location: index.php');
}else{
    echo "No se insertaron los datos";
}

?>