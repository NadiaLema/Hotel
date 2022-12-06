<?php

    include "../Model/conexion_bd.php";
    $mensaje = null;

    if (isset($_POST["ajax"])) {
       
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $dirreccion = $_POST['dirreccion'];
        $provincia = $_POST['provincia'];
        $pais = $_POST['pais'];
        

        if ($nombre == "") {
            $mensaje = "<script>document.getElementById('e_nombre').innerHTML='Por favor ingrese nombre.';</script>"; 

        }else if (!preg_match('/^\S+$/',$nombre)) {
            $mensaje = "<script>document.getElementById('e_nombre').innerHTML='No ingrese espacios';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$nombre)){
            $mensaje = "<script>document.getElementById('e_nombre').innerHTML='Solo se permiten letras!';</script>";
    
        }else if (!preg_match('/[0-9]{9}$/',$telefono) || !preg_match('/^\d{10}$/',$telefono)) {
            $mensaje = "<script>document.getElementById('e_telefono').innerHTML='Télefono inválido!';</script>";
        
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mensaje = "<script>document.getElementById('e_email').innerHTML='Email inválido.';</script>";
       
        }else if ($dirreccion == "") {
            $mensaje = "<script>document.getElementById('e_direccion').innerHTML='Por favor ingrese dirrección.';</script>"; 

        }else if (!preg_match('/^\S+$/',$dirreccion)) {
            $mensaje = "<script>document.getElementById('e_direccion').innerHTML='No ingrese espacios';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$dirreccion)){
            $mensaje = "<script>document.getElementById('e_direccion').innerHTML='Solo se permiten letras!';</script>";
    
        }else if ($provincia == "") {
            $mensaje = "<script>document.getElementById('e_provincia').innerHTML='Por favor ingrese provincia.';</script>"; 

        }else if (!preg_match('/^\S+$/',$provincia)) {
            $mensaje = "<script>document.getElementById('e_provincia').innerHTML='No ingrese espacios';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$provincia)){
            $mensaje = "<script>document.getElementById('e_provincia').innerHTML='Solo se permiten letras!';</script>";
    
        }else if ($pais == "") {
            $mensaje = "<script>document.getElementById('e_pais').innerHTML='Por favor ingrese nombre.';</script>"; 

        }else if (!preg_match('/^\S+$/',$pais)) {
            $mensaje = "<script>document.getElementById('e_pais').innerHTML='No ingrese espacios';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$pais)){
            $mensaje = "<script>document.getElementById('e_pais').innerHTML='Solo se permiten letras!';</script>";
    
        }else{

           
        }
    }

    echo $mensaje;

?>