<?php include "./View/navbar.php";

    $sentencia = $bd->query("SELECT * FROM reserva");
    $reserva = $sentencia->fetchAll(PDO::FETCH_OBJ);
       
?>

        <div class="app-title">
            <div>
            <h1><i class="fa fa-dashboard"></i> Reservas</h1>
            </div>
        </div>
      
     
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablacliente" class="table table-striped table-bordered table-condensed" style="width:100%" >
                <br>               
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Fecha de Llegada</th>
                    <th scope="col">Fecha de Salida</th>
                    <th scope="col">Habitación</th>
                    <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($reserva as $dato) {
                     
                    ?>
                    <tr>
                    <th scope="row"><?php echo $dato->idreserva ?></th>
                    
                    <td><?php echo $dato->fecha_ingreso ?></td>
                    <td><?php echo $dato->fecha_salida ?></td>
                    <th></th>
                    <th>
                        
                        <a class="btn btn-danger btn-sm" href="">Cancelar</a>

                    </th>
                    </tr>
                    
                </tbody>
                    <?php
                        }
                    ?>
                </table>               
            </div>
            </div>
        </div>  
    </div>   









   


<?php include "./View/parte_inferior.php"?>