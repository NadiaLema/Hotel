
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


        
        <div class="text-center fs-1 fw-bold">Recuperar Contraseña</div>
        <form id="recuperar_contrasenia" action=""  method="POST">
            
            <div class="input-group mt-3">
                
               
                <input class="form-control bg-light" type="email" name="email" placeholder="Correo Electronico" 
                    autocomplete="none" />
            </div>
            <div id="error_email" class="text-danger" style="font-size: 12px;"></div>

           
            <div id="error_password" class="text-danger" style="font-size: 12px;"></div>
            <div class="d-grid gap-2">
                <input type="hidden" name="ajaxR">
                <input type="button" id="btn" class="btn btn-info mt-5 text-white" value="Enviar"></input>
            </div>
        </form>
        
<script>
            $(function()
            {
                $("#btn").click(function(){
                    var url = "Controller/config_recuperar_contrasenia.php";
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: $("#form_ajaxR").serialize(),
                        success: function(data)
                        {
                            //para que se me borren los alertas cuando el campo cumplte las condiciones
                           
                            $('#e_usuario').html('');
                            $('#error_email').html('');
                            

                            $("#mensaje").html(data);
                        }

                    });
                });
            });
</script>

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