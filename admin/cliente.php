<?php 
include "View/navbar.php";
include "Model/conexion.php";

$sentencia = $bd->query("SELECT * FROM cliente");
$cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
    
<div class="app-title" >
    <div>
    <h1><i class="fa fa-dashboard"></i> Cliente</h1>
     </div>
</div>

<!--estructura de la tabla-->
<div class="container">
        
    <br>  

    <div class="container caja">
         <?php
        foreach ($cliente as $dato) 
         ?>
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablacliente" class="table table-striped table-bordered table-condensed" style="width:100%" >
                                
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $dato->idcliente?></th>
                    <td><?php echo $dato->nombre_completo?></td>
                    <td><?php echo $dato->direccion?></td>
                    <td><?php echo $dato->provincia?></td>
                    <th><?php echo $dato->pais?></th>
                    <td><?php echo $dato->telefono?></td>
                    <td><?php echo $dato->email?></td>
                    
                    </tr>
                    
                </tbody>

                </table>               
            </div>
            </div>
        </div>  
    </div>   


