<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="licencia/css/estilo_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <?php
               
                if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'no'){ 
                                                     
            ?>
               <!-- <script>swal("Error!", "Email invalido!", "error");</script> -->
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Por favor ingrese un usuario y contraseña válidos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
              }
            ?>
        <form class="form " id="formulario" action="Controller/loginControl.php" method="POST">
            <h1 class="form__title">Iniciar Sesión</h1>
          
            <div class="form-control">
                <input type="text" name="usuario" id="usuario" class="form__input" autofocus placeholder="Usuario">
                 
            </div>
            
            <div class="form-control">
                <input id="password" name="contraseña" type="password" class="form__input" autofocus placeholder="Contraseña">
               
            </div>
            
            <button class="form__button" type="submit">Continuar</button>
        </form>
        <p class="form__text">
                <a href="restaurar-contraseña.php" class="form__link">Olvidaste tu contraseña?</a>
            </p>
           
    </div>
   
</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>