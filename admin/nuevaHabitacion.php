
<!doctype html>
<html lang="en">

<head>
  <title>nuevaH</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
   <div class="container my-5">
      <h2>Nueva Habitación</h2>
            <form action="Controller/nuevoH.php" method="POST" enctype="mulpart/form-data">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre" Value>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Descripción</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="descripcion" Value>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Imagen</label>
                    <div class="col-sm-6">
                    <input type="file" class="form-control" name="imagen" Value>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Precio</label>
                    <div class="col-sm-6">
                    <input type="number" class="form-control" name="precio" Value>
                    </div>
                </div>
                
              <!--botones-->     
                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                         <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="../habitacion.php" role="button">Cancelar</a>
                </div>
                </div>
                
            </form>

   </div>
</body>

</html>