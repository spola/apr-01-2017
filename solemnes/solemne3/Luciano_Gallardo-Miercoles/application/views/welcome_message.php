<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/CssLogin.css">
	<title>Welcome to MonsterInc</title>
</head>
<body>
    <div class="container">
                <div class="pr-wrap">
                <div class="pass-reset">
                    <label>Ingresa tu Email</label>
                    <form>
                    <input type="email" placeholder="Correo" required/>
                    <input type="submit" value="Cambiar" class="pass-reset-submit btn btn-primary btn-sm"/>
                    </form>
                </div>
                </div>
                <form class="form-signin" method="posts" action="index.html">
                    <h1 class="form-signin-heading text-muted">Iniciar sesión</h1>
                    <input type="text" class="form-control" placeholder="Usuario" required="" autofocus="" name="Usuario">
                    <input type="password" class="form-control" placeholder="Contraseña" required="" name="Contraseña" >
                    <div class="row">
                        <div class="col-md-6">
                        <div class="checkbox">
                        <label class="checkbox"><input type="checkbox" />Recuerdame</label>
                        </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                        <a href="javascription:void(0)" class="forgot-pass">Olvido la Contraseña?</a>
                        </div>
                    </div>
                   <button class="btn btn-lg btn-primary btn-block" type="submit" formaction="<?php echo site_url('paginaPrincipal/paginaPrincipal')?>" >Iniciar sesión</button>
                </form>
                <div class="form-signin-registro">
                <a class="btn btn-lg btn-Sprimary btn-block" type="submit" href="Registro.html" >Registrate</a>
                </div>
            </div>
        <br>
        <br>
        <br>
        <br>
        <br> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

        <script>
            $('.forgot-pass').click(function(event) {
                $(".pr-wrap").toggleClass("show-pass-reset");
            }); 
    
            $('.pass-reset-submit').click(function(event) {
                 $(".pr-wrap").removeClass("show-pass-reset");
            }); 
        </script>


</body>
</html>