<?php
include 'conexion_bd.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$consulta = "INSERT INTO usuario(nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";
$ejecutar = mysqli_query($consulta);


?>