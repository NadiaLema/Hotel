<?php
print_r ($_POST) ;

include "../Model/conexion.php";

$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
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
$precio = $_POST['precio'];
//consulta
$sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
$resultado = $sentencia->execute([$nombre,$descripcion,$img,$precio,$id]);


if($resultado){
    header('Location: ../habitacion.php');
}else{
    echo "No se insertaron los datos";
}

?>