<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link  href="Includes/css/estilo_login.css" rel="stylesheet">
   
    
    <title>Crear Cuenta</title>
</head>
<body>
    <div class="container">
        <form action="Controller/registrarControl.php" method="POST" class="form " id="">
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
                <input id="password" type="password" class="form__input" name="password" autofocus placeholder="Contraseña">
               
                <p></p>
            </div>
            <div class="form-control">
                <input  id="confPassword" name="confPassword" type="password" class="form__input"  autofocus placeholder="Confirmar Contraseña">
               
                <p></p>
            </div>
            <button class="form__button" type="submit">Enviar</button>
            <p class="form__text">
            ¿Ya tienes una cuenta? <a class="form__link" href=""  >Iniciar sesión</a>
            </p>
        </form>
    </div>
    <script src="login.js"></script>
</body>
</html>