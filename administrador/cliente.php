<?php 
session_start();
include 'View/parte_superior.php';
/*if (isset($_SESSION['id_admin'])) {
    include 'Model/conexion.php'; 
    $sentencia = $conexion->query("SELECT * FROM cliente");
    $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
}else{
      echo "ERROR EN EL SISTEMA";
}*/
if (!isset($_SESSION['id_admin'])) {
    header('Location: login.php');
  }elseif(isset($_SESSION['id_admin'])){
      include 'Model/conexion.php';  
      $sentencia = $conexion->query("SELECT * FROM cliente");
      $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
      
  }else{
      echo "ERROR EN EL SISTEMA";
  }
?>



<?php 
/*
 include "./View/parte_superior.php";
 include "Model/conexion.php";

 $sentencia = $conexion->query("SELECT * FROM cliente");
 $cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
 */
?>
<!-- Page content-->
    <div class="container-fluid">
       <h3 class="text-center">Clientes</h3>
       


        <div class="table-responsive">
            <table id="datos_cliente" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <tr>
                    <th>#id</th>
                    <th>Nombre y Apellido</th>
                    <th>Dirección</th>
                    <th>Provincia</th>
                    <th>Pais</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    
                    
                </thead>
                <tbody>
                    <?php
                        foreach ($cliente as $dato) {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $dato->idcliente ?></th>
                    <td><?php echo $dato->nombre_completo ?></td>
                    <td><?php echo $dato->direccion ?></td>
                    <td><?php echo $dato->provincia ?></td>
                    <th><?php echo $dato->pais ?></th>
                    <td><?php echo $dato->telefono ?></td>
                    <td><?php echo $dato->email ?></td>
                    
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>


            </table>
        </div>
       
    

</div>




<?php include "./View/parte_inferior.php"?>