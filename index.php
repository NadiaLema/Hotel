<?php

include 'View/navbar.php';

?>
    
    <div class="contenedor-portada" >
        <div class="capa-gradiente"></div>
    </div>

    <div class = "book">
        <form class = "book-form">
            <div class = "form-item">
                <label for = "checkin-date">Llegada: </label>
                
                <input type="text" id="fecha" name="datefilter" value="" />
            </div>
            
            <div class = "form-item">
                <label for = "rooms">Adultos: </label>
                <input type = "number" min = "1" value = "1" id = "rooms">
            </div>
            <div class = "form-item">
                <label for = "rooms">Niños: </label>
                <input type = "number" min = "1" value = "1" id = "rooms">
            </div>
            
            <div class = "submit">
                <button>Ver Tarifa</button>
            </div>
        </form>
    </div>

    <main>
        <section class="container section_1">
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
    <h1 class="Room">Habitaciones</h1>
    <div class="container-card">

        


        <div class="card">
            <div class="face front">
                <img src="Includes/img/img.1.jpg" alt="">
                <h3>SIMPLE</h3>
            </div>
            <div class="face back">
                <h3>Simple</h3>
                <p><i class="las la-tv"></i> TV</p>
                <p> Aire Acondionado</p>
                <p>Calefacción</p>
                <p><i class="las la-wifi"></i> Wifi Gratis</p>
            </div>
        </div>
    
        <div class="card">
            <div class="face front">
                <img src="Includes/img/img.2.jpg" alt="">
                <h3>DOBLE</h3>
            </div>
            <div class="face back">
                <h3>Doble</h3>
                <p><i class="las la-tv"></i> TV</p>
                <p>Aire Acondionado</p>
                <p>Calefacción</p>
                <p><i class="las la-wifi"></i> Wifi Gratis</p>
            </div>
        </div>
    
        <div class="card">
            <div class="face front">
                <img src="Includes/img/img.3.jpg" alt="">
                <h3>TRIPLE</h3>
            </div>
            <div class="face back">
                <h3>Triple</h3>
                <p><i class="las la-tv"></i> TV</p>
                <p>Aire Acondionado</p>
                <p>Calefacción</p>
                <p><i class="las la-wifi"></i> Wifi Gratis</p>
            </div>
        </div>
    
        <div class="card">
            <div class="face front">
                <img src="Includes/img/img4.jpg" alt="">
                <h3>PREMIUM</h3>
            </div>
            <div class="face back">
                <h3>Premium</h3>
                <p><i class="las la-tv"></i> TV</p>
                <p> Aire Acondionado</p>
                <p>Calefacción</p>
                <p>Bañera de Hidromasaje/Jacuzzi</p>
                <p>Terraza/Solarium</p>
                <p><i class="las la-wifi"></i> Wifi Gratis</p>
            </div>
        </div>
        
    </div>
     <h1 class="servicio">Servicios</h1>
      
        
        <div class="container-servicio">
            <ul class="servicio1">
                <li class="service"><i class="las la-shapes" style="font-size:34px ;"></i> Actividades para niños</li>
                <li><i class="las la-swimmer" style="font-size:34px;"></i>Piscina interior</li>
                <li><i class="las la-dumbbell" style="font-size:34px;"></i>Gimnasio</li>
                <li><i class="las la-spa" style="font-size:34px;"></i>Spa</li>
                <li><i class="las la-umbrella-beach"style="font-size:34px;"></i>Piscina exterior</li>
                <li><i class="las la-utensils"style="font-size:34px;"></i>Restaurante</li>
            </ul>
            <ul class="servicio2">
                <li class="service"><i class="las la-dungeon" style="font-size:34px ;"></i> Sala de Eventos</li>
                <li><i class="las la-ambulance" style="font-size:34px;"></i>medicos 24hs</li>
                <li><i class="las la-dumbbell" style="font-size:34px;"></i>Gimnasio</li>
                <li><i class="las la-spa" style="font-size:34px;"></i>Spa</li>
                <li><i class="las la-umbrella-beach"style="font-size:34px;"></i>Piscina exterior</li>
                <li><i class="las la-utensils"style="font-size:34px;"></i>Restaurante</li>
            </ul>
            <ul class="servicio3">
                <li class="service"><i class="las la-car" style="font-size:34px ;"></i> Estacionamiento</li>
                <li><i class="las la-swimmer" style="font-size:34px;"></i>Piscina interior</li>
                <li><i class="las la-dumbbell" style="font-size:34px;"></i>Gimnasio</li>
                <li><i class="las la-spa" style="font-size:34px;"></i>Spa</li>
                <li><i class="las la-umbrella-beach"style="font-size:34px;"></i>Piscina exterior</li>
                <li><i class="las la-utensils"style="font-size:34px;"></i>Restaurante</li>
            </ul>
        </div>


<?php

include 'View/footer.php';

?>