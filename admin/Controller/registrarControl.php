<?php

print_r($_POST);


include "../Model/conexion.php";

$email = $_POST['email'];

$respuesta = new stdClass();

//$consulta = "INSERT INTO usuario(nombre, email, contraseña) VALUES ('$nombre','$email','$contraseña')";//


if( $email != "" ){
 $conexion = new mysqli('bd');
 $sql = " SELECT * FROM admmin WHERE admin = '$email' ";
 $resultado = $conexion->query($sql);
 if($resultado->num_rows > 0){
   $admin = $resultado->fetch_assoc();
   $linkTemporal = generarLinkTemporal( $usuario['IdUsuario'], $usuario['Username'] );
   if($linkTemporal){
    enviarEmail( $email, $linkTemporal );
    $respuesta->mensaje = '<div class="alert alert-info"> Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contraseña </div>';
   }
 }
}
?>