<?php

print_r($_POST);
include "../Model/conexion.php";
$mensaje = null;

$email = $_POST['email'];

        $consulta = $bd->query("SELECT password FROM admin WHERE email = '".$email."'");
        $contrasenia = $consulta->fetchAll(PDO::FETCH_OBJ);
        print_r($contrasenia);

        foreach ($contrasenia as $dato){
            $contra = $dato->password;
        }

        mail($email,"Recuperación de contraseña","Contraseña Adiministrador","USUARIO SU CONTRASEÑA ES ".$contra);

       header('Location: ../login.php')


?>