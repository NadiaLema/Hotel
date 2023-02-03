<?php

include "Model/conexion.php";
include "Controller/funciones.php";

if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_habitacion"]["name"] != '') {
        $imagen = subir_imagen();
    }

    $stmt = $conexion->prepare("INSERT INTO habitacion(tipo_habitacion, descripcion, imagen, precio)VALUES(:tipo_habitacion, :descripcion, :imagen, :precio)");

    $resultado = $stmt->execute(
        array(
            ':tipo_habitacion'    => $_POST["nombre"],
            ':descripcion'    => $_POST["descripcion"],
            ':precio'    => $_POST["precio"],
            ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_habitacion"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_habitacion_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE habitacion SET tipo_habitacion=:tipo_habitacion, descripcion=:descripcion, imagen=:imagen, precio=:precio WHERE idhabitacion = :idhabitacion");

    $resultado = $stmt->execute(
        array(
            ':tipo_habitacion'    => $_POST["nombre"],
            ':descripcion'    => $_POST["descripcion"],
            ':precio'    => $_POST["precio"],
            ':imagen'    => $imagen,
            ':idhabitacion'    => $_POST["id_habitacion"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}