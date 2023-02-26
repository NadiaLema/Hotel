<?php

include '../Model/conexion.php';

$stmt= null;
$resultado= null;


if(isset($_POST['del']))
{
	$idreserva=$_POST['del']
	$stmt = $conexion->prepare("DELETE FROM reserva WHERE idreserva = '$idreserva'");
	$stmt->bindParam(':idreserva', $idreserva, PDO::PARAM_INT);
	$resultado = $stmt->execute();
	header("location_reserva.php");
}




/*
/*
$id = $_POST['id'];

$sentencia = $conexion->prepare("DELETE FROM reserva WHERE idreserva = ?;");
$resultado = $sentencia->execute([$id]);

if ($resultado === TRUE) {
	
	header('Location: ../reserva.php');
} 


*/
/*
$id= null;
$id = $_POST['id'];
$stmt = $conexion->prepare("DELETE FROM reserva WHERE idreserva = '$id'");
$resultado = $stmt->execute(
	array(
		$id=>	$_POST["id"]
	)
);
if(!empty($resultado))
	{
		echo 'Reserva Cancelada Exitosamente';
		
	}

	

/*
if(isset($_POST["id"]))
{

	$stmt = $conexion->prepare("DELETE FROM reserva WHERE idreserva = :idreserva");
	$resultado = $stmt->execute(
		array(
			':idreserva'=>	$_POST["id"]
		)
	);
	if(!empty($resultado))
	{
		echo 'Reserva Cancelada Exitosamente';
		
	}
	
}
*/


?>