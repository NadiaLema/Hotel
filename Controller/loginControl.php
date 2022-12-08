<?php

print_r($_POST);

include "../Model/conexion_bd.php";

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$consulta="SELECT*FROM usuario where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion_bd,$consulta);

if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
header("location: modificarcontrasena.php");

}else{
    echo '
        <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location="login.php"
        </script>
    '   
}

?>