<?php
print_r ($_POST) ;

include "../Model/conexion.php";

$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$img = file_get_contents($_FILES['imagen']['name']); 
$precio = $_POST['precio'];
//consulta
$sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
$resultado = $sentencia->execute([$nombre,$descripcion,$img,$precio,$id]);


if($resultado){
    header('Location: ../habitacion.php');
}else{
    echo "No se insertaron los datos";
}

?>