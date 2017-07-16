<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
    <!doctype HTML>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>" />

        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/estilos/estilologin.css')?>" />
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title"><strong>Login</strong></h1>
                    <div class="account-wall">
                        <img class="profile-img" src="assets/img/logomonsterinc.png" alt="">
                        <form class="form-signin" action="<?php echo site_url(" welcome/logged ")?>" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" required placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="recordarme">Recordarme</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                            <label class="center"></label>
                        </form>
                        <?php if(error) :?> Nombre usuario o contraseña invalido
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>
