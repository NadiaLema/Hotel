<?php

include 'View/navbar.php';
include 'Model/conexion_bd.php';
    
    $sentencia = $bd->query("SELECT * FROM habitacion");
    $habitacion = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
    
    <div class="contenedor-portada" >
        <div class="capa-gradiente"></div>
    </div>

   

    <main>
        <section class="container section_1" id="nosotros">
          <h3. class="section_1-title">"HOTEL MENDOZA"</h3>
            <div class="us">
                <div class="us-text">
                 <div class="us-paragraph">
                  <p class="paragraph-text">Hotel Mendoza ofrece recepción abierta 24 horas, conserje y servicio de habitaciones.
                     Además, como huésped de Hotel Mendoza, puedes disfrutar de piscina y desayuno incluido disponibles allí mismo.
                    </p>
                  <p class="paragraph-text">El hotel se encuentra en el centro de la ciudad, a 15 minutos del aeropuerto internacional, 
                    a 30 minutos de exclusivas Bodegas y 90 minutos de los principales centros de ski.
                     Rodeado por imponentes paisajes de viñedos bajo la Cordillera de los Andes y situado en una de las Grandes Capitales 
                     del Vino se convierte en un destino ideal para viajes de placer y negocios.</p>
                    </div>
                </div>
                <div class="us-img">
                    <img src="Includes/img/presentacion.jpg" alt="" class="img-img">
                </div>
            </div>
        </section>
       
    </main>



    <h1 class="Room" id="habitaciones">Habitaciones</h1>
    <div class="container-card">
    <?php

    foreach ($habitacion as $dato) {
      

    ?>
    
    <a class="text-success" href="habitaciones.php?idhabitacion=<?php echo $dato -> idhabitacion; ?>">
        <div class="card" >
            
            <div class="face front">
                <?php 
                echo'<img src="./administrador/img/'.$dato->imagen.'" >';
                ?>
              
        
              
                <h3><?php echo $dato->tipo_habitacion ?></h3>
            </div>
            <div class="face back">
                <h3><?php echo $dato->tipo_habitacion ?></h3>
                <p><i class="las la-tv"></i> TV</p>
                <p><?php echo $dato->descripcion_corta ?></p>
                <p><i class="las la-wifi"></i> Wifi Gratis</p>
            </div>
        </div>
     </a>
    
    <?php
    }
    ?>

    </div>
    
     <h1 class="servicio" id="servicio">Servicios</h1>
      
        
        <div class="container-servicio">
            <ul class="servicio1">
                <li class="service"><i class="las la-shapes" style="font-size:34px ;"></i> Actividades para niños</li>
                <li><i class="las la-swimmer" style="font-size:34px;"></i> Piscina interior</li>
                <li><i class="las la-dumbbell" style="font-size:34px;"></i> Gimnasio</li>
                <li><i class="las la-spa" style="font-size:34px;"></i> Spa</li>
                <li><i class="las la-umbrella-beach"style="font-size:34px;"></i> Piscina exterior</li>
                
            </ul>
            <ul class="servicio2">
                <li class="service"><i class="las la-dungeon" style="font-size:34px ;"></i> Sala de Eventos</li>
                <li><i class="las la-utensils"style="font-size:34px;"></i> Restaurante</li>
                <li><i class="las la-snowflake" style="font-size:34px;"></i> Aire Acondicionado</li>
                <li><i class="las la-glass-martini"style="font-size:34px;"></i> Bar</li>
                <li><i class="las la-wifi" style="font-size:34px;"></i> Wifi</li>
               
            </ul>
            <ul class="servicio3">
            <li><i class="las la-bell" style="font-size:34px;"></i> Recepción 24hs</li>
                <li class="service"><i class="las la-car" style="font-size:34px ;"></i> Estacionamiento</li>
                <li><i class="las la-key" style="font-size:34px;"></i> Portero</li>
                <li><i class="las la-ambulance" style="font-size:34px;"></i> Médicos 24hs.</li>
                <li><i class="las la-wheelchair" style="font-size:34px;"></i> Accesibilidad</li>
               
            </ul>
        </div>


<?php

include 'View/footer.php';

?>