<?php include "view/nav2.php"; 
    include "Model/conexion_bd.php";
    $idhabitacion = $_GET['idhabitacion'];
    $sentencia = $bd->query("SELECT * FROM habitacion WHERE idhabitacion = '".$idhabitacion."'");
    $habitacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
    $sentenciaReserva = $bd->query("SELECT * FROM reserva");
    $reserva = $sentenciaReserva->fetchAll(PDO::FETCH_OBJ);
?>

<main  class="d-flex align-items-stretch">

    
    <div class="container mt-5 mb-5">
    <div class="row ">
        <div class="col-sm-8 col-md-8 col-lg-8 ">
            <div class=" bg-white rounded-lg shadow  d-lg-flex¨"  >
                <?php

                foreach ($habitacion as $dato) {
                

                ?>
                <!--imagen de habitación-->
                <div class="" >
                    
                  <img class="rounded mx-auto d-block w-50 h-50 "  src="data:image/jpg;base64,<?php echo base64_encode($dato->img);?>">
                   
                </div>

                <div class="card_info p-4">
                    <!--titulo del habitaciones-->
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="mb-0 mr-2"><?php echo $dato->tipo_habitacion ?></h5>
                    </div>

                    <div class="d-flex justify-content-between align-items-end">
                        <div class="">
                            <!--iconos del diseño -->
                            <div class="amnities d-flex mb-3 p-1">
                            <i class="las la-bath"></i>
                            <i class="las la-wifi"></i>
                            <i class="las la-tv"></i>
                            <i class="las la-bed"></i>
                            <i class="las la-concierge-bell"></i>
                            <i class="las la-luggage-cart"></i>
                            </div>
                            <!--descripcion-->
                            <div class="pl-0 mb-0"> 
                                <p class="card-text"><?php echo $dato->descripcion ?></p>
                            </div>
                           
                            
                        </div>
                         <!--precio de la habitacion mas el boton -->
                         <div class="text-end">
                                <h3>$<?php echo $dato->precio ?></h3>
                                                                                                
                            </div>
       
                    </div>

                   
                </div>
                <?php

                }
                ?>
            </div>
            
        </div>
         <!--formulario de horarios-->
         <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Días de Estancia</span>
        </h4>
         
           <a href="resevar.php?idhabitacion=<?php echo $idhabitacion ?>"><input type="button" id="btn_ajax" class="btn btn-primary btn-lg btn-block col-sm-10 mt-4" value="Reservar"></input></a> 
        
    </div>
    </div>
    

  </main>

  <script>
            $(function()
            {
                $("#btn_ajax").click(function(){
                    var url = "Controller/calendarioControl.php";
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: $("#form_ajax").serialize(),
                        success: function(data)
                        {
                            //para que se me borren los alertas cuando el campo cumplte las condiciones
                            
                           

                            $("#mensaje").html(data);
                        }

                    });
                });
            });
</script>


  
   


<?php include "view/footer.php"; ?>


                          
