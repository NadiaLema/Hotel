<?php
    include_once '../Model/conexion.php';
    $mensaje = null;

    
    
 if (isset($_POST["ajaxR"]))
{
    
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    

    $buscoUsu = "SELECT * FROM admin WHERE usuario = ? ;";
    $sentenciaUsu = $conexion->prepare($buscoUsu);
    $sentenciaUsu->execute(array($usuario));
    $resultadoUsu = $sentenciaUsu->fetch();

    $buscoMail = "SELECT * FROM admin WHERE email = ? ;";
    $sentenciaMail = $conexion->prepare($buscoMail);
    $sentenciaMail->execute(array($email));
    $resultadoMail = $sentenciaMail->fetch();

    // var_dump($resultadoUsu); imprimo

    if ($usuario == "") {
        $mensaje = "<script>document.getElementById('e_usuario').innerHTML='Por favor ingrese usuario.';</script>";

    }else if (!preg_match('/^\S+$/',$usuario)) {
        $mensaje = "<script>document.getElementById('e_usuario').innerHTML='No ingrese solo espacios.';</script>"; 

    }else if ($resultadoUsu == FALSE) {
        $mensaje = "<script>document.getElementById('e_usuario').innerHTML='El usuario no existe!';</script>";

    }else if(strlen($usuario) < 3){
        $mensaje = "<script>document.getElementById('e_usuario').innerHTML='El usuario debe contener al menos 3 caracteres.';</script>";
        
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "<script>document.getElementById('e_email').innerHTML='Email inválido.';</script>";

    }else  if ($resultadoMail == FALSE) {
        $mensaje = "<script>document.getElementById('e_email').innerHTML='El mail no existe';</script>";

    }else{

        $consulta = $conexion->query("SELECT password_admin FROM admin WHERE email = '".$email."'");
        $contrasenia = $consulta->fetchAll(PDO::FETCH_OBJ);
        //print $contasenia;

        foreach ($contrasenia as $dato){
            $contra = $dato->password_admin;
        }

        mail($email,"Recuperación de contraseña","Contraseña Adiministrador","USUARIO ".$usuario." SU CONTRASEÑA ES ".$contra);

        $mensaje = "<script>alert('Recibira un email con su contraseña');
        window.location='login.php';
       </script>";

        }

}
    
echo $mensaje;