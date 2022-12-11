<?php
print_r ($_POST) ;

include "../Model/conexion.php";

$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
<<<<<<< HEAD
//$img = sys.dbms_lob.getlength($_FILES['imagen']['size']);
//$imagenBinaria = file_get_contents($_FILES['imagen']['tmp_name']);
$img = $_FILES['imagen']['size']; //Obtenemos el tamaño del archivo en Bytes
//$tamañoArchivoKB = round(intval(strval( $tamañoArchivo / 1024 ))); //Pasamos el tamaño del archivo a KB



//$_FILES['imagen']['size'];
//$imgContent = addslashes(file_get_contents($img)); 
//$img = mysql_real_escape_string(file_get_contents($_FILES['imagen']['tmp_name']));
/*
$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false){
    $img = $_FILES['image']['tmp_name'];
    $imgContent = addslashes(file_get_contents($img));
}
*/
=======
$img = $_FILES['imagen']['name'];   
>>>>>>> 8ed267a2b5e534968202601083d49777e0e37302
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