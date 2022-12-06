<?php

// print_r($_POST);

include "../Model/conexion_bd.php";
$mensaje = null;
$resultado = null;
$idreserva = null;


$fecha_ingreso = $_POST['fecha_ingreso'];
$fecha_salida  = $_POST['fecha_salida'];
$idhabitacion = $_POST['idhabitacion'];

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

}else{
  

    $sentencia = $bd->prepare("INSERT INTO reserva(fecha_ingreso,fecha_salida,habitacion_idhabitacion) VALUES (?,?,?);");
    $resultado= $sentencia->execute([$fecha_ingreso,$fecha_salida,$idhabitacion]);
    
    $idreserva = $bd->lastInsertId();

    
        
    
    
}


if ($resultado) {
    //$mensaje = "<script>window.location='resevar.php?fecha_ingreso=".$fecha_ingreso."&fecha_salida=".$fecha_salida."&idhabitacion=".$idhabitacion."';</script>"; // averiguar mandar datos por url en java script
    $mensaje = "<script>window.location='resevar.php?idreserva=".$idreserva."';</script>";
}
//echo $idreserva;
//echo $resultado;
// var_dump($resultadoFI);
echo $mensaje;

?>