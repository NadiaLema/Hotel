<?php 
 include "View/navbar.php";
 include "Model/conexion.php";

 $sentencia = $bd->query("SELECT * FROM habitacion");
 $habitacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
 
?>

<div class="app-title" >
    <div>
    <h1><i class="fa fa-dashboard"></i> Habitación</h1>
     </div>
</div>
<br>
<a href="../nuevaHabitacion.php" class="btn btn-success">Agregar Habitación</a>
<!--estructura de la tabla-->
<div class="container">
        
    <br>  

    <div class="container caja">
         
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablacliente" class="table table-striped table-bordered table-condensed" style="width:100%" >
                                
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">precio</th>
                    <th scope="col">Acciones</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($habitacion as $dato) {
                     
                    ?>
                  
                    <tr>
                    <th scope="row"><?php echo $dato->idhabitacion ?></th>
                    <td><?php echo $dato->tipo_habitacion ?></td>
                    <td><?php echo $dato->descripcion ?></td>
                    <td><img width="200px" src="data:image/jpg;base64,<?php echo base64_encode($dato->img);?>"></td>
                    <th><?php echo $dato->precio ?></th>
                    <!--botones-->
                    <th>
                     <a class="btn btn-primary btn-sm" href="editarHabitacion.php?id=<?php echo ($dato->idhabitacion)?>">Editar</a>  
                     <a class="btn btn-danger btn-sm" href="">Cancelar</a>

                    </th>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>

                </table>               
            </div>
            </div>
        </div>  
    </div>   


