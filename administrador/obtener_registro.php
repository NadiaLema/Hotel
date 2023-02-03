
<?php

 include "Model/conexion.php";
 include "Controller/funciones.php";

if (isset($_POST["id_habitacion"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM habitacion WHERE idhabitacion = '".$_POST["id_habitacion"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["nombre"] = $fila["tipo_habitacion"];
        $salida["descripcion"] = $fila["descripcion"];
        $salida["precio"] = $fila["precio"];
        if ($fila["imagen"] != "") {
            $salida["imagen_habitacion"] = '<img src="img/' . $fila["imagen"] . '"  class="img-thumbnail" width="100" height="50" /><input type="hidden" name="imagen_habitacion_oculta" value="'.$fila["imagen"].'" />';
        }else{
            $salida["imagen_habitacion"] = '<input type="hidden" name="imagen_habitacion_oculta" value="" />';
        }
    }

    echo json_encode($salida);
}