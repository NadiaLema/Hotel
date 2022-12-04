<?php include "view/nav2.php"; 
    include "Model/conexion_bd.php";
    $idhabitacion = $_GET['idhabitacion'];
    $sentencia = $bd->query("SELECT * FROM habitacion WHERE idhabitacion = '".$idhabitacion."'");
    $habitacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<main>

    
    <div class="container mt-5 mb-5">
    <div class="row" style="justify-content: center;">
        <div class="col-sm-9 col-md-9 col-lg-9">
            <div class="hotel-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                <?php

                foreach ($habitacion as $dato) {
                

                ?>
               
                <div class="card_info p-4">
                    <!--titulo del habitaciones-->
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="mb-0 mr-2"><?php echo $dato->tipo_habitacion ?></h5>
                    </div>

                    <div class="d-flex justify-content-between align-items-end">
                        <div class="">
                            <!--descripcion-->
                            <div class="pl-0 mb-0"> 
                                <p class="card-text"><?php echo $dato->descripcion ?></p>
                            </div>
                           
                            
                        </div>
                         <!--precio de la habitacion mas el boton -->
                         <div class="text-end">
                                <h3><?php echo $dato->precio ?></h3>
                                
                                <button class="btn btn-primary">Reservar</button>
                            </div>
       
                    </div>

                   
                </div>
                <?php

                }
                ?>
            </div>
            
        </div>
        
    </div>
    </div>
 

    
   
  </main>
<?php include "view/footer.php"; ?>