<?php session_start(); ?>
<html>

<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/estiloLogin.css">
</head>

<body>
    <img src="https://s-media-cache-ak0.pinimg.com/originals/3a/9c/63/3a9c63f63784ff719a484cf45d3a029b.jpg" id="imgfondo" />
    <?php include "php/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Login</h2>
                <form role="form" name="login" action="php/login.php" method="post">
                    <div class="form-group">
                        <label for="username">Apodo de monstruo o email</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label for="password">Contrase&ntilde;a</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
                    </div>

                    <button type="submit" class="btn btn-default">Acceder</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/valida_login.js"></script>
</body>

</html>
