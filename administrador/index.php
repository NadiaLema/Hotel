
<?php 
session_start();
include 'View/parte_superior.php';
if (isset($_SESSION['id_admin'])) {
    include 'Model/conexion.php'; 
}else{
      echo "ERROR EN EL SISTEMA";
}

?>



<!-- Page content-->
    <div class="container-fluid">
    <h3 class="text-center">Vista General</h3>
                    
    </div>
<?php include "./View/parte_inferior.php"?>