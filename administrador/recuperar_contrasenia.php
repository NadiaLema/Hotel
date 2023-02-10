<?php   
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="../Includes/assets/Logo.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recuperar contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <!-- iconos cdn -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">

       
       
        <div class="text-center fs-1 fw-bold">
        <div><h2>Recordar Contraseña</h2></div>
        </div>
        
        <div id="mensaje"></div>
        
        <form id="form_ajaxR" method="POST" action="">
            <div class="input-group mt-4">
                
                <input class="form-control bg-light" type="text" placeholder="Nombre de usuario" name="usuario" />               
            </div>
            <div id="e_usuario" class="text-danger" style="font-size: 12px;"></div>

            <div class="input-group mt-4">
                
                <input class="form-control bg-light" type="text" placeholder="Email" name="email"/>                
            </div>
            <div id="e_email" class="text-danger" style="font-size: 12px;"></div>

           
            <div id="e_password" class="text-danger" style="font-size: 12px;"></div>
            <div class="d-grid gap-2">
                <input type="hidden" name="ajaxR">
                <input type="button" id="btn_ajaxR" class="btn btn-primary mt-5 text-white" value="Enviar"></input>
            </div>
        </form>

    </div>
</body>



<script>
            $(function()
            {
                $("#btn_ajaxR").click(function(){
                    var url = "Controller/recordarcontrasenia.php";
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: $("#form_ajaxR").serialize(),
                        success: function(data)
                        {
                            //para que se me borren los alertas cuando el campo cumplte las condiciones
                           
                            $('#e_usuario').html('');
                            $('#e_email').html('');
                            

                            $("#mensaje").html(data);
                        }

                    });
                });
            });
</script>