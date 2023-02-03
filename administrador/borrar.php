<?php

include "Model/conexion.php";
include "Controller/funciones.php";

if(isset($_POST["id_habitacion"]))
{
	$imagen = obtener_nombre_imagen($_POST["id_habitacion"]);
	if($imagen != '')
	{
		unlink("img/" . $imagen);
	}
	$stmt = $conexion->prepare(
		"DELETE FROM habitacion WHERE idhabitacion = :idhabitacion"
	);
	$resultado = $stmt->execute(
		array(
			':idhabitacion'	=>	$_POST["id_habitacion"]
		)
	);
	

	if(!empty($resultado))
	{
		echo 'Registro borradoo';
	}
}



?>