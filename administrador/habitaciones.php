
<?php 
session_start();
include 'View/parte_superior.php';
/*if (isset($_SESSION['id_admin'])) {
    include 'Model/conexion.php'; 
}else{
      echo "ERROR EN EL SISTEMA";
}*/
if (!isset($_SESSION['id_admin'])) {
    header('Location: login.php');
  }elseif(isset($_SESSION['id_admin'])){
      include 'Model/conexion.php';  
      
      
  }else{
      echo "ERROR EN EL SISTEMA";
  }

?>


<!-- Page content-->
    <div class="container-fluid">
       <h3 class="text-center">Habitaciones</h3>
       
       <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn  btn-success w-100" data-bs-toggle="modal" data-bs-target="#modalHabitacion" id="botonCrear">
                        <i class="bi bi-plus-circle-fill"></i> Crear
                        </button>
                </div>
            </div>
        </div>
        <br />
        <br />


        <div class="table-responsive">
            <table id="datos" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
            </table>
        </div>
       
    

</div>


<!-- Modal -->
<div class="modal fade" id="modalHabitacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Habitación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
        <form method="POST" id="formulario" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                    <label for="nombre">Ingrese Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <div id="error_nombre" class="text-danger" style="font-size: 12px;"></div>
                    <br />

                    <label for="apellidos">Ingrese Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                    <br />

                    <label for="imagen">Seleccione una imagen</label>
                    <input type="file" name="imagen_habitacion" id="imagen_habitacion" class="form-control">
                    <span id="imagen_subida"></span>
                    <br />
                    
                    <label for="apellidos">Ingrese Precio</label>
                    <input type="text" name="precio" id="precio" class="form-control">
                    <br />

                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id_habitacion" id="id_habitacion">
                    <input type="hidden" name="operacion" id="operacion">             
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                </div>
            </div>
        </form>
      </div>     
  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include "./View/parte_inferior.php"?>