<?php

    include "../Model/conexion_bd.php";
    $mensaje = null;
    $resultado = null;
    $idCliente = null;
    $idreserva = null;

    if (isset($_POST["ajax"])) {
           
        //$idreserva = $_POST["idreserva"];
        //$fechaE = $_POST['fechaE'];
        //$fechaS = $_POST['fechaS'];

        $nombre_habitacion = $_POST['nombre_habitacion'];
        $fecha_ingreso = $_POST['fecha_ingreso'];
        $fecha_salida  = $_POST['fecha_salida'];
        $idhabitacion = $_POST['idhabitacion'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $dirreccion = $_POST['dirreccion'];
        $provincia = $_POST['provincia'];
        $pais = $_POST['pais'];

        $buscoFechaIngreso ="SELECT * FROM reserva INNER JOIN habitacion ON reserva.habitacion_idhabitacion = habitacion.idhabitacion WHERE reserva.fecha_ingreso = ? AND reserva.habitacion_idhabitacion = '".$idhabitacion."';";
        $sentenciaFI = $bd->prepare($buscoFechaIngreso);
        $sentenciaFI->execute(array($fecha_ingreso));
        $resultadoFI = $sentenciaFI->fetch();

        $buscoFechaSalida ="SELECT * FROM reserva INNER JOIN habitacion ON reserva.habitacion_idhabitacion = habitacion.idhabitacion WHERE reserva.fecha_ingreso = ? AND reserva.habitacion_idhabitacion = '".$idhabitacion."';";
        $sentenciaFS = $bd->prepare($buscoFechaSalida);
        $sentenciaFS->execute(array($fecha_salida));
        $resultadoFS = $sentenciaFS->fetch();

        if ($fecha_ingreso == "") {
            $mensaje = "<script>document.getElementById('e_ingreso').innerHTML='Ingrese fecha.';</script>";
            
        }else if ($resultadoFI) {
            $mensaje = "<script>document.getElementById('e_ingreso').innerHTML='Fecha no disponible.';</script>";

        }else if ($fecha_salida == "") {
            $mensaje = "<script>document.getElementById('e_salida').innerHTML='Ingrese fecha.';</script>";

        }else if ($fecha_salida < $fecha_ingreso) {
            $mensaje = "<script>document.getElementById('e_salida').innerHTML='La fecha de salida debe ser mayor a la fecha de ingreso.';</script>";

        }else  if ($nombre == "") {
            $mensaje = "<script>document.getElementById('e_nombre').innerHTML='Por favor ingrese nombre.';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$nombre)){
            $mensaje = "<script>document.getElementById('e_nombre').innerHTML='Solo se permiten letras!';</script>";

        }else  if ($telefono == "") {
            $mensaje = "<script>document.getElementById('e_telefono').innerHTML='Por favor ingrese télefono.';</script>"; 
 

        }else if (!preg_match('/[0-9]{9}$/',$telefono) || !preg_match('/^\d{10}$/',$telefono)) {
            $mensaje = "<script>document.getElementById('e_telefono').innerHTML='solo se permiten numeros!';</script>";
        
        }else if ($email == "") {
            $mensaje = "<script>document.getElementById('e_email').innerHTML='Por favor complete el email!';</script>";
       
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mensaje = "<script>document.getElementById('e_email').innerHTML='Email inválido.';</script>";
       
        }else if ($dirreccion == "") {
            $mensaje = "<script>document.getElementById('e_direccion').innerHTML='Por favor ingrese dirección.';</script>"; 

        }else if ($provincia == "") {
            $mensaje = "<script>document.getElementById('e_provincia').innerHTML='Por favor ingrese provincia.';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$provincia)){
            $mensaje = "<script>document.getElementById('e_provincia').innerHTML='Solo se permiten letras!';</script>";
    
        }else if ($pais == "") {
            $mensaje = "<script>document.getElementById('e_pais').innerHTML='Por favor ingrese pais.';</script>"; 

        }else if (!preg_match('/^\S+$/',$pais)) {
            $mensaje = "<script>document.getElementById('e_pais').innerHTML='No ingrese espacios';</script>"; 

        }else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$pais)){
            $mensaje = "<script>document.getElementById('e_pais').innerHTML='Solo se permiten letras!';</script>";
    
        }else{

            $sentenciaR = $bd->prepare("INSERT INTO reserva(fecha_ingreso,nombre_cliente,fecha_salida,nombre_habitacion,habitacion_idhabitacion) VALUES (?,?,?,?,?);");
            $resultadoR = $sentenciaR->execute([$fecha_ingreso,$nombre,$fecha_salida,$nombre_habitacion,$idhabitacion]);
            $idreserva = $bd->lastInsertId();

            $sentencia = $bd->prepare("INSERT INTO cliente(nombre_completo,direccion,provincia,pais,telefono,email,reserva_idreserva) VALUES (?,?,?,?,?,?,?);");
            $resultado= $sentencia->execute([$nombre,$dirreccion,$provincia,$pais,$telefono,$email,$idreserva]);
            // $idCliente = $bd->lastInsertId();
            $mensaje = "<script>alert('Reserva Creada Exitosamente');
                         window.location='index.php';
                        </script>";
            

            
        }
        
    
    } 

    //echo $resultado;
    //echo $idCliente;
    //echo $idreserva;
    echo $mensaje;

?>