<?php include "view/nav2.php"; ?>
    <div class="container">
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Resumen de mí reserva</span>
        
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Llegada: </h6>
            <h6 class="my-0">Salida: </h6>
            <h6 class="my-0">Estancia: </h6>
            <h6 class="my-0">Huéspedes: </h6>
          </div>
          <span class="text-muted">$12</span>
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
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nombre y Apellido</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se requiere un nombre válido.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" placeholder="" value="" required>
            <div class="invalid-feedback">
              Se requiere un teléfono válido.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</span></label>
          <input type="email" class="form-control" id="email" placeholder="alexgomez@.com">
          <div class="invalid-feedback">
            Ingrese una dirección de correo válido.
          </div>
        </div>

        <div class="mb-3">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" id="direccion" placeholder="1234 San Matín" required>
          <div class="invalid-feedback">
            Por favor introduzca una dirección válida.
          </div>
        </div>

        <div class="mb-3">
          <label for="provincia">Provincia</label>
          <input type="text" class="form-control" id="provicia" placeholder="Formosa">
        </div>

        <div class="mb-3">
          <label for="pais">Pais</label>
          <input type="text" class="form-control" id="pais" placeholder="Argentina">
        </div>
        <hr class="mb-2">
        <button class="btn btn-primary btn-lg btn-block" type="submit">RESEVAR</button>
        </hr>
    </div>