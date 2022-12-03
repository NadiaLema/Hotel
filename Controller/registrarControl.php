<?php

print_r($_POST);

include 'conexion_bd.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$confPassword = $_POST['confPassword'];

//$consulta = "INSERT INTO usuario(nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";



?>