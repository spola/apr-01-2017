<?php session_start(); ?>
<html>

<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/estiloRegistro.css">
    <style>
        #imgfondo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1
        }
    </style>
</head>

<body>
    <img src="https://s-media-cache-ak0.pinimg.com/originals/3a/9c/63/3a9c63f63784ff719a484cf45d3a029b.jpg" id="imgfondo" />
    <?php include "php/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Registro</h2>
                <form role="form" name="registro" action="php/registro.php" method="post">
                    <div class="form-group">
                        <label for="username">Apodo monstruo</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Nombre monstruo</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
                    </div>

                    <button type="submit" class="btn btn-default">Registrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/valida_registro.js"></script>
</body>

</html>
