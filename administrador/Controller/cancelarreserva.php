<?php

include '../Model/conexion.php';

if(isset($_POST["id_reserva"]))
{

	$stmt = $conexion->prepare(
		"DELETE FROM reserva WHERE idreserva = :idreserva"
	);
	$resultado = $stmt->execute(
		array(
			':idreserva'=>	$_POST["id_reserva"]
		)
	);
	
	if(!empty($resultado))
	{
		echo 'Reserva Cancelada Exitosamente';
	}
}



?>