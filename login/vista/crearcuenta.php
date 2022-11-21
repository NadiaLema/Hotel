<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<form class="form form--hidden--dos" id="restaurar">
    <link rel="stylesheet" href="login.css">
    
    <title>Crear Cuenta</title>
</head>
<body>
    <div class="container">
        <form action="php/registrar.php" method="POST" class="form " id="formulario">
            <h1 class="form__title">Crear Cuenta</h1>
          
            <div class="form-control">
                <input type="text" id="nombre" class="form__input" name="nombre" autofocus placeholder="Nombre">
                
                <p></p>
            </div>
            <div class="form-control">
                <input id="email" type="email" class="form__input" name="email" autofocus placeholder="Email ">
               
                <p></p>
            </div>
            <div class="form-control">
                <input id="contraseña" type="password" class="form__input" name="contraseña" autofocus placeholder="Contraseña">
               
                <p></p>
            </div>
            <div class="form-control">
                <input  id="conficontraseña" type="password" class="form__input"  autofocus placeholder="Confirmar Contraseña">
               
                <p></p>
            </div>
            <button class="form__button" type="submit">Continuar</button>
            <p class="form__text">
                <a class="form__link" href="login.php" id="linkLogin">¿Ya tienes una cuenta? Iniciar sesión</a>
            </p>
        </form>
    </div>
    <script src="login.js"></script>
</body>
</html>