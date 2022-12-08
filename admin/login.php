<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Includes/css/estilo_login.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class="form " id="formulario" action="Controller/loginControl.php" method="POST">
            <h1 class="form__title">Iniciar Sesión</h1>
          
            <div class="form-control">
                <input type="text" name="nombre" id="nombre" class="form__input" autofocus placeholder="Nombre">
                
                <p></p>
            </div>
            
            <div class="form-control">
                <input id="password" name="password" type="password" class="form__input" autofocus placeholder="Contraseña">
               
                <p></p>
            </div>
            
            <button class="form__button" type="submit">Continuar</button>
        </form>
        <p class="form__text">
                <a href="restaurar-contraseña.php" class="form__link">Olvidaste tu contraseña?</a>
            </p>
           
    </div>
   
</body>
</html>