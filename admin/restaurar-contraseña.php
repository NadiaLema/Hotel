
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form class="form form--hidden--dos >
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="licencia/css/estilo_login.css">
    
    <title>Restaurar Contraseña</title>
</head>
<body>
    <div class="container">
        <form class="form" action="Controller/recuperarContra.php"  method="POST">
            <h1 class="form__title">Restaurar Contraseña</h1>

            <div class="form-control">
                <input type="text" name="email" class="form__input" autofocus placeholder="Email ">              
                
            </div>
          
            <button class="form__button" type="submit">Enviar</button>
            
        </form>
    </div>
    <script src="login.js"></script>
</body>

</html>