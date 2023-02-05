<?php

session_start();
//SI YA EXISTE UNA SESION LE DIGO QUE NO SALGA DE LA PAGINA INDEX
//if (isset($_SESSION['id_admin'])) { 
  //  header('Location: index.php');
//}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- sweetalert --> 
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>       
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">


        
        <div class="text-center fs-1 fw-bold">Iniciar Sesión</div>
        <form  action="Controller/login_entrar.php"  method="POST">
            <div class="input-group mt-4">
                
                <input class="form-control bg-light" type="text" name="usuario_admin" placeholder="Usuario" 
                    autocomplete="none" />
            </div>
            <div class="input-group mt-3">
                
                <input class="form-control bg-light" type="password" name="password_admin" placeholder="Password" 
                    autocomplete="none" />
            </div>
            <div class="d-flex left-content-around mt-1">

                <div class="pt-1 ">
                    <a href="recuperar_contrasenia.php" class="text-decoration-none text-primary fw-semibold fst-italic text"
                        style="font-size: 0.8rem">¿Ovidaste tu contraseña?</a>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary mt-5 text-white" >Iniciar Sesión</button>
            </div>
        </form>
       

    </div>
</body>

</html>


  
      
       <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    