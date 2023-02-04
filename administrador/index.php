
<?php 
session_start();
include 'View/parte_superior.php';
if (isset($_SESSION['id_admin'])) {
    include 'Model/conexion.php'; 
    $sentencia="SELECT COUNT(idcliente)FROM cliente";
    $resultado = $conexion->prepare($sentencia);
    $resultado->execute(array());
    $cantidadC=$resultado->fetchColumn();

    $sentencia="SELECT COUNT(idreserva)FROM reserva";
    $resultado = $conexion->prepare($sentencia);
    $resultado->execute(array());
    $cantidadR=$resultado->fetchColumn();

    $sentencia="SELECT COUNT(idhabitacion)FROM habitacion";
    $resultado = $conexion->prepare($sentencia);
    $resultado->execute(array());
    $cantidadH=$resultado->fetchColumn();

}else{
      echo "ERROR EN EL SISTEMA";
}

?>



<!-- Page content-->
    <div class="container-fluid">
    <h3 class="text-center">Vista General</h3>
    <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $cantidadC ?></h3>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                <p class="fs-5">Clientes</p>
                            </div>
                            <i class="bi bi-people-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $cantidadR ?></h3>
                                <p class="fs-5">Reservas</p>
                            </div>
                            <i class="bi bi-journal-text fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo $cantidadH ?></h3>
                                <p class="fs-5">Habitaciones</p>
                            </div>
                            <i class="bi bi-house-door-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
    </div>
    

        <div class="logo text-center">
            <img src="img/log-PhotoRoom.png"  class="logo"  rel="stylesheet" alt=""> 
        </div>
    

</div>
<?php include "./View/parte_inferior.php"?>