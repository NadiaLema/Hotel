<?php
include 'conexion_bd.php';

$nombre = $_POST['nombrebd'];
$email = $_POST['emailbd'];
$contraseña = $_POST['contraseñabd'];

$consulta = "INSERT INTO usuario( nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";
$ejecutar = mysqli_query($conexion_bd, $consulta);


?>