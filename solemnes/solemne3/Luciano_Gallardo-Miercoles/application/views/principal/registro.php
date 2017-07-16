<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/assets/CssRegistro.css">
    </head>
    <body>
        <div class="Contenedor">
            <div class="row">
                <form class="form-signin" method="get" action="Registro.html">
                    <h1 class="form-signin-heading text-muted">Registrate</h1>
                    <input type="text" class="form-control" placeholder="Nombre de Usuario" required="" autofocus="">
                    <input type="text" class="form-control" placeholder="Nombre" required="" autofocus="">
                    <input type="text" class="form-control" placeholder="Apellidos" required="" autofocus="">
                    <input type="email" class="form-control" placeholder="Email" required="" autofocus="">
                    <input type="password" class="form-control" placeholder="Contraseña" required="">
                    <input type="password" class="form-control" placeholder="Repita la Contraseña" required="">
                    <input type="date" class="form-control" required="" autofocus="">  
                    <div class="row">
                        <div class="col-md-6">
                        <div class="checkbox">
                        <label class="checkbox"><input type="checkbox" />Recuerdame</label>
                        </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                   <button class="btn btn-lg btn-primary btn-block" type="submit" formaction="index.html" >Registrar</button>

                </form>
                
            </div>
        </div>
    </body>
</html>