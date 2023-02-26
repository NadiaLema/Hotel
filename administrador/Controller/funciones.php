<?php

    function subir_imagen(){
        if (isset($_FILES["imagen_habitacion"])) {
            
            $extension = explode('.', $_FILES["imagen_habitacion"]['name']);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './img/' . $nuevo_nombre;
            move_uploaded_file($_FILES["imagen_habitacion"]['tmp_name'], $ubicacion);
            return $nuevo_nombre;
        }
    }

    function obtener_nombre_imagen($id_habitacion){
        include('Model/conexion.php');
        $stmt = $conexion->prepare("SELECT imagen FROM habitacion WHERE idhabitacion = '$id_habitacion'");
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $fila){
            return $fila["imagen"];
        }
    }

    function obtener_todos_registros(){
        include('Model/conexion.php');
        $stmt = $conexion->prepare("SELECT * FROM habitacion");
        $stmt->execute();
        $resultado = $stmt->fetchAll(); 
        return $stmt->rowCount();       
    }

   