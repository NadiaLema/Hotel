<?php
// print_r ($_POST) ;

include "../Model/conexion.php";
$mensaje = null;
$resultado = null;

$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$image = $_FILES['imagen'];   
$precio = $_POST['precio'];

//validaciones

if ($nombre == "") {
    $mensaje = "<script>document.getElementById('nombre_error').innerHTML='Por favor ingrese nombre.';</script>"; 

}else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$nombre)){
    $mensaje = "<script>document.getElementById('nombre_error').innerHTML='Solo se permiten letras!';</script>";

}else  if ($descripcion == "") {
    $mensaje = "<script>document.getElementById('descripcion_error').innerHTML='Por favor ingrese una descripción.';</script>";

}else  if ($precio == "") {
    $mensaje = "<script>document.getElementById('precio_error').innerHTML='Por favor ingrese un precio.';</script>";

}else if(!preg_match('/^[0-9]+$/',$precio)){
    $mensaje = "<script>document.getElementById('precio_error').innerHTML='solo se permiten numeros.';</script>"; 

 // consulta
}else{
   
    $sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
    $resultado = $sentencia->execute([$nombre,$descripcion,$binariosImagen,$precio,$id]);

    
    $mensaje = "<script>window.location='../habitacion.php';</script>";
}




?>