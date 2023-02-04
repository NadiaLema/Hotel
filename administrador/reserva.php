
 <?php 
session_start();
include 'View/parte_superior.php';
if (isset($_SESSION['id_admin'])) {
    include 'Model/conexion.php'; 
    $sentencia = $conexion->query("SELECT * FROM reserva");
    $reserva = $sentencia->fetchAll(PDO::FETCH_OBJ);
}else{
      echo "ERROR EN EL SISTEMA";
}

?>

<?php
/* 
 include "./View/parte_superior.php";
 include "Model/conexion.php";

 $sentencia = $conexion->query("SELECT * FROM reserva");
 $reserva = $sentencia->fetchAll(PDO::FETCH_OBJ);
 */
?>
<!-- Page content-->
    <div class="container-fluid">
       <h3 class="text-center">Reserva</h3>
       


        <div class="">
            <table id="datos_reserva"  class="display" style="width:100%">
                <thead>
                    
                    <th>#id</th>
                    <th>Nombre y Apellido</th>
                    <th>Fecha_Ingreso</th>
                    <th>Fecha_Salida</th>
                    <th>Habitación</th>
                    <th>Cancelar</th>
                    
                    
                </thead>
                <tbody>
                    <?php
                        foreach ($reserva as $dato) {

                          
                    ?>
                    <tr>
                       
                    <th ><?php echo $dato->idreserva?></va th>
                    <td><?php echo $dato->nombre_cliente ?></td>
                    <td><?php echo $dato->fecha_ingreso ?></td>
                    <td><?php echo $dato->fecha_salida ?></td>
                    <th><?php echo $dato->nombre_habitacion ?></th>
                    <th>
                    
                    <button  type="button"  name="cancelar" id="<?php echo $dato->idreserva ?>" class=" btn btn-danger btn-sm cancelar" >Cancelar</button>
                   
                   
                    <!--<button type="button" name="borrar" id="'.$fila["idhabitacion"].'" class="btn btn-danger btn-xs borrar">Borrar</button>-->
                    <!--onclick="cancelar('<?php echo $dato->idreserva?>');"-->
                    </th>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>


            </table>
        </div>
       
    

</div>




<?php include "./View/parte_inferior.php"?>