<?php

print_r($_POST);


include "../Model/conexion.php";

$email = $_POST['email'];


//$consulta = "INSERT INTO usuario(nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";//
$contraseña = $bd->prepare(" SELECT * FROM admin WHERE admin = email=?");
$resultado->execute([$mail]);
$datos=$contraseña->fetch(PDO::FETCH_OBJ);

$email_correcto = "mi.email.correcto@gmail.com";
 
$email_incorrecto = "mi.email.incorrecto";

if (filter_var($email_incorrecto, FILTER_VALIDATE_EMAIL)) {
  echo "Esta dirección de correo ($email_incorrecto) es válida.";
}

if (filter_var($email_correcto, FILTER_VALIDATE_EMAIL)) {
  echo "Esta dirección de correo ($email_correcto) es válida.";
}
?>