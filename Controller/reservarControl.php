<?php

    include "../Model/conexion_bd.php";
    $mensaje = null;
    $resultado = null;
    $idCliente = null;
    $idreserva = null;
    $suma = null;

    if (isset($_POST["ajax"])) {

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

        /*
        //Obtengo cantidad de habitaciones
        $sentCant = "SELECT SUM(cantidad) FROM habitacion WHERE idhabitacion = '".$idhabitacion."'";
        $resultadoCant = $bd->prepare($sentCant);
        $resultadoCant->execute(array());
        $datoCant = $resultadoCant->fetchColumn();
       // echo $datoCant;

        $sentCantOCP = "SELECT SUM(cantidad_ocupada) FROM habitacion WHERE idhabitacion = '".$idhabitacion."'";
        $resultadoCantOCP = $bd->prepare($sentCantOCP);
        $resultadoCantOCP->execute(array());
        $datoCantOCP = $resultadoCantOCP->fetchColumn();
       // echo $datoCantOCP;
       */
        $buscoFechaIngreso ="SELECT * FROM reserva INNER JOIN habitacion ON reserva.habitacion_idhabitacion = habitacion.idhabitacion WHERE reserva.fecha_ingreso = ? AND reserva.habitacion_idhabitacion = '".$idhabitacion."';";
        $sentenciaFI = $bd->prepare($buscoFechaIngreso);
        $sentenciaFI->execute(array($fecha_ingreso));
        $resultadoFI = $sentenciaFI->fetch();

   
        $buscoFechaSalida ="SELECT * FROM reserva INNER JOIN habitacion ON reserva.habitacion_idhabitacion = habitacion.idhabitacion WHERE reserva.fecha_ingreso = ? AND reserva.habitacion_idhabitacion = '".$idhabitacion."';";
        $sentenciaFS = $bd->prepare($buscoFechaSalida);
        $sentenciaFS->execute(array($fecha_salida));
        $resultadoFS = $sentenciaFS->fetch();
       
        //$mensaje = "<script>document.getElementById('cantidad').innerHTML='No hay habitaciones disponibles.';</script>";

       /* if ($datoCant == $datoCantOCP) {
            $mensaje = "<script>document.getElementById('cantidad').innerHTML='No hay habitaciones disponibles.';</script>";
            
        }else*/ if ($fecha_ingreso == "") {
            $mensaje = "<script>document.getElementById('e_ingreso').innerHTML='Ingrese fecha.';</script>";
            
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

            //Actualizo
            /*
            $suma = intval($datoCantOCP) + 1;
            //echo $suma;
            $sentHabi = $bd->prepare("UPDATE habitacion SET cantidad_ocupada = ? WHERE idhabitacion = ?");
            $resultadoHab = $sentHabi->execute([$suma,$idhabitacion]);
            */

            $mensaje = "<script>alert('Reserva Creada Exitosamente');
                         window.location='index.php';
                        </script>";
            
              //funcion para enviar el correo electronico       
            $destinatario = $email;
            $asunto = "Solicitud de Reserva"; 
            $cuerpo = '
                <html> 
                    <head> 
                        <title>Hotel Mendoza</title> 
                    </head>
            
                    <body> 
                        <h1>Reserva creada exitosamente</h1>
                        <p>hola 
                        Gracias '.$nombre.' por reservar con nosotros.Estos son los detalles de tu reserva:
                        </p>
                        <h3>Datos del Titular</h3>
                        <p> 
                            Nombre:'.$nombre.' <br>
                            Teléfono:'.$telefono.'<br>
                            Dirección:'.$dirreccion.'<br>
                            Provincia:'.$provincia.'<br>
                            Pais:'.$pais.'<br>
                            
                        </p> 
                        
                        <h3>Datos de Hospedaje</h3>
                        <p>
                            Habitación:'.$nombre_habitacion.'<br>
                            Desde:'.$fecha_ingreso.'<br>
                            Hasta:'.$fecha_salida.'<br>
                        </p>
                    </body>
                </html>
            ';

                //para el envío en formato HTML 
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=UTF8\r\n"; 

                //dirección del remitente

                $headers .= "FROM: Hotel Mendoza <$email>\r\n";
                mail($destinatario,$asunto,$cuerpo,$headers);

                //echo "Correo enviado"; 

        } 
            
    } 

    echo $mensaje;


?>