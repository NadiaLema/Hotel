<?php
print_r ($_POST) ;

include "../Model/conexion.php";

$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$img = $_FILES['imagen']['name'];   
$precio = $_POST['precio'];
//consulta
$sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
$resultado = $sentencia->execute([$nombre,$descripcion,$img,$precio,$id]);

/*
 $sentencia = $bd->prepare("UPDATE habitacion SET 
 nombre = ? ,
 descripcion = '$descripcion',
 img = '$imagen',
 precio = '$precio' WHERE idhabitacion = $id ");
 */
 // $resultado = $mysqli->query($sentencia);
/*
 if ($resultado)
    {  
        //Ejecuta sentencia.
        // $sentencia->execute();//Transfiere un conjunto de resulados de la última consulta.
       header(" location:index.php");
    }
    else
    {
        echo "Hubo un problema con la consulta";
    }
*/
if($resultado){
    header('Location: ../index.php');
}else{
    echo "No se insertaron los datos";
}

?>