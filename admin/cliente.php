<?php 
include "View/navbar.php";
include "./Model/conexion.php";

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
        foreach ($cliente as $dato) {
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
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <th>las</th>
                    <td>la</td>
                    <td>ññ</td>
                    
                    </tr>
                    
                </tbody>

                </table>               
            </div>
            </div>
        </div>  
    </div>   

      

<?php include "View/parte_inferior.php"?>
     


