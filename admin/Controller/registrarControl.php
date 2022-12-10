<?php

print_r($_POST);


include "../Model/conexion.php";

$email = $_POST['email'];


//$consulta = "INSERT INTO usuario(nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";//
$consulta=$bd->prepare("SELECT*FROM admin email=? ");
$consulta->execute([$email]); 

$datos=$consulta->fetch(PDO::FETCH_OBJ);
if ($datos===FALSE) {
    header("Location: ../restaurar-contraseña.php?mensaje=no");
} else if($consulta->rowCount()==1){
   header("Location: ../login.php"); 
}

?>