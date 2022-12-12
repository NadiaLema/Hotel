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
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>

  <?php 
   include "Model/conexion.php";
   $id = $_GET['id'];
   $sentencia = $bd->query("SELECT * FROM habitacion WHERE idhabitacion = $id");
   $habitacion = $sentencia->fetchAll(PDO::FETCH_OBJ); 
   
  ?>

   <div class="container my-5">
      <h2>Editar Habitación</h2>
                    <?php
                        foreach ($habitacion as $dato) {
                     
                    ?>
            <div id="mensaje"></div>
            <form action="" method="POST" enctype="multipart/form-data" id="form_ajax">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre" Value="<?php echo ($dato->tipo_habitacion) ?>">
                    </div>
                    <div id="nombre_error" class="text-danger" style="font-size: 12px;"></div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Descripción</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="descripcion" Value="<?php echo ($dato->descripcion)?>">
                    </div>
                    <div id="descripcion_error" class="text-danger" style="font-size: 12px;"></div>
                </div>
                <div class="row mb-3">

                    
                    <label class="col-sm-3 col-form-label">Imagen</label>
                    <div class="col-sm-6">
                    <img width="50px" src="data:image/jpg;base84,<?php echo base64_encode($dato->img);?>">
                    <input type="file" name="imagen" >
                    
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Precio</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="precio" Value="<?php echo ($dato->precio)?>">
                    </div>
                    <div id="precio_error" class="text-danger" style="font-size: 12px;"></div>
                </div>
                <?php
                    }
                ?>
              <!--botones-->     
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="ajax">
                    <input class="btn btn-primary btn-lg btn-block text-white" id="btn_ajax" name="final" type="button"
                    value="Guardar"></input>
                    </div>
                    <div class="col-sm-3 d-grid">

                    <a class="btn btn-outline-primary" href="" role="button">Cancelar</a>
                </div>
                </div>
                
            </form>
        </div>


        <script>
        $(function() {
            $("#btn_ajax").click(function() {
                var url = "Controller/editH.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#form_ajax").serialize(),
                    success: function(data) {
                        //para que se me borren los alertas cuando el campo complete las condiciones
                        $('#nombre_error').html('');
                        $('#descripcion_error').html('');
                        $('#precio_error').html('');
                        

                        $("#mensaje").html(data);
                    }

                });
            });
        });
        </script>
</body>

</html>