
 <?php 
session_start();
include 'View/parte_superior.php';




if (!isset($_SESSION['id_admin'])) {
    header('Location: login.php');
  }elseif(isset($_SESSION['id_admin'])){
      include 'Model/conexion.php';  
      $sentencia = $conexion->query("SELECT * FROM reserva");
      $reserva = $sentencia->fetchAll(PDO::FETCH_OBJ);
      
  }else{
      echo "ERROR EN EL SISTEMA";
  }
?>

<?php 
include_once "Controller/cancelarreserva.php";
$sqlite = new sqlite();

?>

<!-- Page content-->
    <div class="container-fluid">
       <h3 class="text-center">Reserva</h3>
        

       
        <div class="">
        <?php
                    if(isset($_REQUEST['idBorrar'])){
                        $res=$sqlite->borrar($_REQUEST['idBorrar']);
                        ?>
                            <div class="alert alert-<?php echo $res?"success":"danger"; ?> alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                 
                                </button>
                                <?php echo $res?"Registro borrado":"Registro no borrado"; ?>
                            </div>
                        <?php
                    }
        ?>
            <table id="datos_reserva"  class="table table-responsive table-bordered" style="width:100%">
                <thead class="table-primary">
                    
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
                       
                    <th ><?php echo $dato->idreserva?></th>
                    <td><?php echo $dato->nombre_cliente ?></td>
                    <td><?php echo $dato->fecha_ingreso ?></td>
                    <td><?php echo $dato->fecha_salida ?></td>
                    <th><?php echo $dato->nombre_habitacion ?></th>
                    <th>
                    <a href="reserva.php?idBorrar=<?php echo $dato->idreserva;?>"  class="btn-danger btn-sm cancelar">Cancelar</a>
                    
                  
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