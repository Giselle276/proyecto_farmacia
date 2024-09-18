<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/all.min.css">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="imagenes/icono.ico">
</head>
<?php
    session_start();
    if(!empty($_SESSION['us_tipo']))
    {
        header('Location:controlador/logincontroller.php');
    }
    else
    {
       session_destroy(); 
?>
<body>
    <img class="wave" src="imagenes/wave.png" alt="">
    <div class="contenedor">
        <div class="img">
            <img src="imagenes/farmaceuticos.png" alt="">
        </div>
        <div class="contenido-login">
            <form action="controlador/logincontroller.php" method="post">
                <img src="imagenes/usuario.png" alt="">
                <h2>Farmacia</h2>
                <div>
                   <div class="input-div">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input">
                    </div>
                   </div> 
                   <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Contraseña</h5>
                            <input type="password" name="pass" class="input">
                        </div>
                   </div>
                   <a href="">Crear usuario</a>
                   <input type="submit" class="btn" value="Iniciar Sesión">
                </div>
            </form>
        </div>

    </div>
</body>
<script src="js/login.js"></script>
</html>
<?php
//header('Location:../vista/login.php');
    }
    ?>