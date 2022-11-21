<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// recepcion de los datos enviados mediante el Post desde js
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$provincia = (isset($_POST['provincia'])) ? $_POST['provincia'] : '';
$pais = (isset($_POST['pais'])) ? $_POST['pais'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idcliente= (isset($_POST['idcliente'])) ? $_POST['idcliente'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO cliente (nombre, apellido, direccion, provincia, pais, telefono, email) VALUES('$nombre', '$apellido', '$direccion', '$provincia', '$pais', '$telefono','$email') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM cliente ORDER BY idcliente DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', direccion='$direccion', provincia='$provincia', pais='$pais', telefono='$telefono', email='$email' WHERE idcliente='$idcliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM cliente WHERE idcliente='$idcliente' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM cliente WHERE idcliente='$idcliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM cliente";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;