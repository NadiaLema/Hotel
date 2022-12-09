<?php

print_r($_POST);

include "../Model/conexion.php";

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$consulta=$bd->prepare("SELECT*FROM admin where usuario=? and password=?");
$consulta->execute([$usuario, $contraseña]);

$datos=$consulta->fetch(PDO::FETCH_OBJ);
if ($datos===FALSE) {
    header("Location: ../login.php?mensaje=no");
} else if($consulta->rowCount()==1){
   header("Location: ../index.php"); 
}


?>