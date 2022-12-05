<?php

   include "view/nav2.php";
    include "Model/conexion_bd.php";

    $sentencia

?>

    <div class="container mt-5">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Resumen de mí reserva</span>
        
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Llegada: <span class="text-muted">$12</span></h6>
            <h6 class="my-0">Salida: <span class="text-muted">$12</span> </h6>
            <h6 class="my-0">Estancia: <span class="text-muted">$12</span></h6>
           
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Habitación</h6>
            <small class="text-muted">HABITACION SIMPLE</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Tarifa</h6>
            <small class="text-muted">Vier-Dom</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
       
        <li class="list-group-item d-flex justify-content-between">
          <span>Total: </span>
          <strong>$20</strong>
        </li>
      </ul>

    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">DATOS PERSONALES</h4>
      <div id="mensaje"></div>
      <form class="needs-validation" id="form_ajax" method="POST">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre y Apellido</label>
            <input type="text" class="form-control" name="nombre" value="" required>
            <div style="font-size: 12px;" id="e_nombre" class="text-danger"></div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="" required>
            <div style="font-size: 12px;" id="e_telefono" class="text-danger"></div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</span></label>
          <input type="email" class="form-control"  name="email" >
          <div style="font-size: 12px;" id="e_email" class="text-danger"></div>
        </div>

        <div class="mb-3">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" name="dirreccion" required>
          <div style="font-size: 12px;" id="e_direccion" class="text-danger"></div>
        </div>

        <div class="mb-3">
          <label for="provincia">Provincia</label>
          <input type="text" class="form-control"  name="provincia" >
          <div style="font-size: 12px;" id="e_provincia" class="text-danger"></div>
        </div>

        <div class="mb-3">
          <label for="pais">Pais</label>
          <input type="text" class="form-control"  name="pais" >
          <div style="font-size: 12px;" id="e_pais" class="text-danger"></div>
        </div>
        <hr class="mb-2 mt-5">
        <input type="hidden" name="ajax">
        <input class="btn btn-primary btn-lg btn-block text-white" id="btn_ajax" type="button" value="Reservar"></input>
        </hr>
    </div>

    <script>
            $(function()
            {
                $("#btn_ajax").click(function(){
                    var url = "Controller/reservarControl.php";
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: $("#form_ajax").serialize(),
                        success: function(data)
                        {
                            //para que se me borren los alertas cuando el campo cumplte las condiciones
                            $('#e_nombre').html('');
                            $('#e_telefono').html('');
                            $('#e_email').html('');
                            $('#e_direccion').html('');
                            $('#e_provincia').html('');
                            $('#e_pais').html('');

                            $("#mensaje").html(data);
                        }

                    });
                });
            });
</script>