<?php 
// print_r ($_POST) ;
$image = null;
include "../Model/conexion.php";
//variables
$nombre =$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$image = $_POST['imagen'];
$precio =$_POST['precio'];

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
     //Consulta
    $sentencia = $bd->prepare("INSERT INTO habitacion(tipo_habitacion,descripcion,img,precio) VALUE (?,?,?,?)");
     //resultado mediante las variables 
    $resultado = $sentencia->execute([$nombre,$descripcion,$image,$precio]);

    $mensaje = "<script>window.location='habitacion.php';</script>";
}

echo $mensaje; 





?>