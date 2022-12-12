<?php
print_r ($_POST) ;

include "../Model/conexion.php";
/*
$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
<<<<<<< HEAD
$img = $_FILES['imagen']['name'];   
$precio = $_POST['precio'];
//consulta
=======
$archivo = $_FILES['imagen'];   
$tmp_name=$archivo['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$archivoBLOB=addslashes($contenido_archivo);
$precio = $_POST['precio'];


if (isset($_REQUEST['idEditar'])) {
        $nombre = $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $precio = $_POST['precio'];

    if (isset($_FILES['imagen']['name'])) {
        $tipoArchivo = $_FILES['imagen']['type'];
        $nombreArchivo = $_FILES['imagen']['name'];
        $tamanoArchivo = $_FILES['imagen']['size'];
        $imagenSubida = fopen($_FILES['imagen']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);

            //consulta
        $sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
        $resultado = $sentencia->execute([$nombre,$descripcion,$binariosImagen,$precio,$id]);
    }

}
*/
$id = $_REQUEST['idEditar'];

if(isset($_REQUEST["idEditar"])){
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['imagen']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        $nombre = $_POST['nombre'];
        $descripcion= $_POST['descripcion'];
        $precio = $_POST['precio'];


        
        //Insert image content into database
        $sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
        $resultado = $sentencia->execute([$nombre,$descripcion,$imgContent,$precio,$id]);

        if($resultado){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

/*consulta
>>>>>>> 1f11fc3691d72055bbd030505ae3354286322a81
$sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
$resultado = $sentencia->execute([$nombre,$descripcion,$archivo,$precio,$id]);
*/

















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

if($resultado){
    header('Location: ../index.php');
}else{
    echo "No se insertaron los datos";
}
*/
?>