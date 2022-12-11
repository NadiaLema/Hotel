<?php 
print_r ($_POST) ;

include "../Model/conexion.php";
//variables
$nombre =$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$image = $_FILES['imagen'];
$precio =$_POST['precio'];
//Consulta
$sentencia = $bd->prepare("INSERT INTO habitacion(tipo_habitacion,descripcion,img,precio) VALUE (?,?,?,?)");
//resultado mediante las variables 
$resultado = $sentencia->execute([$nombre,$descripcion,$image,$precio]);

if($resultado){
    header('Location: ../habitacion.php');
}else{
    echo "No se insertaron los datos";
}


?>