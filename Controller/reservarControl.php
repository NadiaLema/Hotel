<?php

    include "../Model/conexion_bd.php";
    $mensaje = null;
    $resultado = null;
    $idCliente = null;
    $idreserva = null;
    $resultadoF = null;
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
        $validar ="select fecha_ingreso,fecha_salida,cantidad from reserva where"  
      if (($fecha_ingreso===$fecha_ingreso and $fecha_salida===$fecha_salida)=>$cantidad){
        echo "<script type=''>alert('Fecha no esta disponible. Por favor elija otra.');</script>";
    
      }else{
        echo "<script type=''>alert('Fecha disponible');</script>";
      }
    */

       //rango de fechas que para cada tipo dehabitación no permita elegir la misma fecha 
        $rangofecha =   ("SELECT fecha_ingreso, fecha_salida, habitacion_idhabitacion FROM reserva
        WHERE (habitacion_idhabitacion = '$idhabitacion') AND 
        (('$fecha_ingreso' BETWEEN fecha_ingreso AND date_sub(fecha_salida, interval +1 day))
        OR 
        ('$fecha_salida' BETWEEN date_sub(fecha_ingreso,interval -1 day) AND fecha_salida)
        OR
        (fecha_ingreso <= '$fecha_ingreso' AND fecha_salida >= '$fecha_salida')
        OR
        (fecha_ingreso >= '$fecha_ingreso' AND fecha_salida <='$fecha_salida'))");
      

        $sentenciaRF = $bd->prepare($rangofecha);
        $sentenciaRF->execute(array());
        $resultadoRF = $sentenciaRF->fetchColumn();
        
            if(($resultadoRF) > 0)
            {
               echo "<script type=''>alert('Fecha no disponible. Por favor elija otra.');</script>";
               //$mensaje = "<script>document.getElementById('e_cantidad').innerHTML='Ingrese fecha.';</script>";
               return false;
             }else{
               echo "<script type=''>alert('Fecha Disponible.');</script>";
               return true;
            }   
    
       

/*
        $buscoFechaIngreso =   "SELECT fecha_ingreso FROM reserva
        WHERE fecha_ingreso = '$fecha_ingreso' and habitacion_idhabitacion =  '$idhabitacion'";
        $sentenciaFI = $bd->prepare($buscoFechaIngreso);
        $sentenciaFI->execute(array($fecha_ingreso));
        $resultadoFI = $sentenciaFI->fetchColumn();
        if (!empty($fecha_ingreso)){
            if($resultadoFI > 0)
            {
               echo '<div id="Error"></div>';
               echo "<script type=''>alert('Ya existe una fecha agregada $fecha_ingreso para el municipio de $idhabitacion');</script>";
             }else{
               echo "";
            }   
        }
        echo  $resultadoFI;
        
*/
        if ($fecha_ingreso == "") {
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

            /*Actualizo
            
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