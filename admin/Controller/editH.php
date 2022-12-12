<?php
// print_r ($_POST) ;

include "../Model/conexion.php";
$mensaje = null;
$resultado = null;

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
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

}else if(!preg_match('/^([0-9]+\.+[0-9]|[0-9])+$/',$precio)){
    $mensaje = "<script>document.getElementById('precio_error').innerHTML='solo se permiten numeros.';</script>"; 

        
    
       
}else{

    //Insert image content into database
    $sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
    $resultado = $sentencia->execute([$nombre,$descripcion,$imgContent,$precio,$id]);

    $mensaje = "<script>window.location='habitacion.php';</script>";
}

echo $mensaje; 















?>