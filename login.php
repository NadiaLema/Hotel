<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form class="form form--hidden--dos" id="restaurar">
    <link rel="stylesheet" href="login.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class="form " id="formulario">
            <h1 class="form__title">Iniciar Sesión</h1>
          
            <div class="form-control">
                <input type="text" id="nombreuno" class="form__input" autofocus placeholder="Nombre">
                
                <p></p>
            </div>
            
            <div class="form-control">
                <input id="contraseña" type="password" class="form__input" autofocus placeholder="Contraseña">
               
                <p></p>
            </div>
            
            <button class="form__button" type="submit">Continuar</button>
            <p class="form__text">
                <a href="restaurar-contraseña.php" class="form__link">Olvidaste tu contraseña?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="vista/crearcuenta.php" id="linkLogin">No tienes una cuenta? Crear Cuenta</a>
            </p>
        </form>
    </div>
   
</body>
</html>