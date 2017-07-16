<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('assest/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assest/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assest/EstiloLogin.css') ?>">

        <title>Monsters inc</title>
    </head>

    <body>
        <div class="loginPrincipal">
            <h1>Ingresa tu cuenta</h1><br>
            <form action="<?php echo site_url("Welcome/logged")?>" method="post">
                <input type="text" name="usuario" placeholder="Correo" required>
                <input type="password" name="contraseña" placeholder="Constraseña" required>
                <input type="submit" name="login" class="boton-ingresar" value="Ingresar">
            </form>
            <?php if($error) :?> Nombre usuario o contraseña invalido
            <?php endif?>
            <div class="ayuda">
                Bienvenido a Monsters Inc -
                <a href="<?php echo site_url("Welcome/registro") ?>"> Registrate</a>
            </div>

        </div>
    </body>

    </html>
