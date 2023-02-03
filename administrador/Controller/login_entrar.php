<?php
session_start();
include '../Model/conexion.php';
//recepcion de los datos enviados mediante post desde ajax
$usuario = $_POST['usuario_admin'];
$password = $_POST['password_admin'];


$sentencia = $conexion->prepare("SELECT * FROM admin WHERE usuario = ? AND password_admin = ? ");
$sentencia->execute([$usuario, $password]);
$datos = $sentencia->fetch(PDO::FETCH_OBJ);//Lo guardo dentro del objeto

//print_r($datos);

if ($datos === FALSE) {
   header('Location: ../login.php?');
}else if( $sentencia->rowCount() == 1){
    $_SESSION['id_admin'] = $datos->usuario;
   header('Location: ../index.php');
  
}



/*
$consulta = "SELECT * FROM admin WHERE usuario = ? AND password = ? ";
$resultado = $conexion ->prepare($consulta);
$resultado-> execute([$usuario, $password]);
$data = $resultado->fetchAll(PDO::FETCH_OBJ);

//condiciones
if($data === false){
  header('Location: ../login.php?mensaje=no');
}else if ($resultado->rowCount() == 1){
  $_SESSION['s_usuario'] = $data->s_usuario;
  header('Location: ../index.php');
}

/*
if($resultado->rowCount() >= 1){

    $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
}else{
   $_SESSION["s_usuario"] = null;
  $data = null;
}

print json_encode($data);
$conexion = null;
*/
?>