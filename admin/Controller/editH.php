<?php
// print_r ($_POST) ;

include "../Model/conexion.php";
$mensaje = null;
$resultado = null;

$id = $_REQUEST['idEditar'];
$nombre = $_POST['nombre'];
$descripcion= $_POST['descripcion'];
<<<<<<< HEAD
$image = $_FILES['imagen'];   
=======
<<<<<<< HEAD
$img = $_FILES['imagen']['name'];   
$precio = $_POST['precio'];
//consulta
=======
$archivo = $_FILES['imagen'];   
$tmp_name=$archivo['tmp_name'];
$contenido_archivo=file_get_contents($tmp_name);
$archivoBLOB=addslashes($contenido_archivo);
>>>>>>> 94861bef64ef77282d8b693b38195257ebb10a00
$precio = $_POST['precio'];

//validaciones

if ($nombre == "") {
    $mensaje = "<script>document.getElementById('nombre_error').innerHTML='Por favor ingrese nombre.';</script>"; 

}else if(!preg_match('/^[a-záéóóúàèìòùäëïöüñ\s]+$/i',$nombre)){
    $mensaje = "<script>document.getElementById('nombre_error').innerHTML='Solo se permiten letras!';</script>";

}else  if ($descripcion == "") {
    $mensaje = "<script>document.getElementById('descripcion_error').innerHTML='Por favor ingrese una descripción.';</script>";

}else  if ($precio == "") {
    $mensaje = "<script>document.getElementById('precio_error').innerHTML='Por favor ingrese un precio.';</script>";

}else if(!preg_match('/^[0-9]+$/',$precio)){
    $mensaje = "<script>document.getElementById('precio_error').innerHTML='solo se permiten numeros.';</script>"; 

<<<<<<< HEAD
 // consulta
=======

        
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
>>>>>>> 94861bef64ef77282d8b693b38195257ebb10a00
}else{
   
    $sentencia = $bd->prepare("UPDATE habitacion SET tipo_habitacion = ?, descripcion = ?,img = ?, precio = ? WHERE idhabitacion = ?");
    $resultado = $sentencia->execute([$nombre,$descripcion,$binariosImagen,$precio,$id]);

    
    $mensaje = "<script>window.location='../habitacion.php';</script>";
}




?>