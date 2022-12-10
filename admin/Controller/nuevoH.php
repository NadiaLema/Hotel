<?php 
include "Model/conexion.php";
//variables
$nombreH =$_POST["nombre"];
$descripcionH =$_POST["descripcion"];
$precioH =$_POST["precio"];
$imagenH = addcslashes(file_get_contents($_FILES["imagen"]['tpm_name'])) ;

//consulta
$sentencia = $bd->prepare("INSERT INTO 'habitacion'(tipo_habitacion,descripcion,img, precio) VALUES('$nombreH','$descripcionH','$precioH','$imagenH')");
$resultado = $sentencia->execute([$nombreH,$descripcionH,$precioH,$imagenH]);
if($resultado){
    header('Location: index.php');
}else{
    echo "No se insertaron los datos";
}





?>