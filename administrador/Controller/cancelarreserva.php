<?php
include 'Model/conexion.php';
$mensaje= null;

$sentecia = null;
class sqlite {
	function borrar($idreserva){
		include 'Model/conexion.php';
		$query="DELETE FROM reserva WHERE idreserva=:idreserva";
		$sentecia= $conexion->prepare($query);
		$sentecia->bindParam(':idreserva',$idreserva);
		if($sentecia->execute()==true){
			return true;
		}
		else{
			return false;
		}
	}
}



/*
$stmt= null;
$resultado= null;

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['del']));	
				   
	$id =$_POST['del'];	 
	
	$sql = "DELETE FROM `reserva` WHERE idreserva = '$id'";
	$stmt = $conexion->prepare($sql);
	//$stmt->bindParam(':id', $id);
	$stmt->execute();
	header('Location:../reserva.php');



    $id = $_POST['del'];

	$stmt = "DELETE FROM  reserva WHERE idreserva = :id";
	$stmt->bindParam(':id', $id);
	
	
	if(isset($_POST['del'])) { 
	  $id = $_POST['id']; 
	  $stmt->execute();
	  header('Location: ../../reserva.php');
	}





if(isset($_POST['del']))

{
	$id = $_POST['del'];

	$stmt = "DELETE FROM  reserva WHERE idreserva = :id";
	$stmt->bindParam(':id', $id);
	
	
	if(isset($_POST['btn_delete'])) { 
	  $id = $_GET['id']; 
	  $stmt->execute();
	  header('Location: ../../users.php');
	}




	$idreserva=$_POST['del'];
	$stmt = $conexion->prepare("DELETE FROM reserva WHERE idreserva = :idreserva");
	$resultado = $stmt->execute(
		array(
			':idreserva'=>	$_POST["$idreserva"]
		)
	);
	if(!empty($resultado))
	{
		echo 'Reserva Cancelada Exitosamente';
		
	}



	
	$idreserva=$_POST['del'];
	$stmt = $conexion->prepare("DELETE FROM reserva WHERE idreserva = '$idreserva'");
	$resultado = $stmt->execute($stmt);

	if ($resultado === TRUE) {
	
		header('Location:../reserva.php');
	}

	
}






$id = $_POST['id'];

$sentencia = $conexion->prepare("DELETE FROM reserva WHERE idreserva = ?;");
$resultado = $sentencia->execute([$id]);

if ($resultado === TRUE) {
	
	header('Location: ../reserva.php');
} 




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

