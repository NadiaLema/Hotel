<!doctype html>
<html lang="en">

<head>
  <title>EditarH</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

  <?php 
   include "Model/conexion.php";
   $id = $_REQUEST['idhabitacion'];
   $bd = "SELECT * FROM habitacion WHERE idhabitacion = $id";
   $resultado = $conexion->query($bd);
   $Fila = $resultado->fetch_assoc();
  ?>

   <div class="container my-5">
      <h2>Editar Habitación</h2>
            <form action="editH.php?idEditar=<?php echo $Fila["id"]?>" method="POST" enctype="multipart/form.dara">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombreH" Value="<?php echo $Fila['nombre']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Descripción</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="descripcionH" Value="<?php echo $Fila['descripcion']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Imagen</label>
                    <div class="col-sm-6">
                    <input type="file" class="form-control" name="imagenH">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Precio</label>
                    <div class="col-sm-6">
                    <input type="number" class="form-control" name="precioH" Value="<?php echo $Fila['precio']?>">
                    </div>
                </div>
                
              <!--botones-->     
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                         <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="" role="button">Cancelar</a>
                </div>
                </div>
                
            </form>

   </div>
</body>

</html>