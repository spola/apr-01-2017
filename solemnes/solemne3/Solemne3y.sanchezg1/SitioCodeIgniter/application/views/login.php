<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" />
    <title>Monsters, Inc</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <img src="../assets/img/monsters-inc-508033ba7af03.png" alt="" />
        </div>
        <div class="row">
            <form class="form-horizontal" action="<?php echo site_url("welcome/logged")?>" method="post">
                <div class="form-group">
                    <div class="col-sm-4 centrar">
                        <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 centrar">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        <?php if($error) :?>
                            <span>Usuario o contraseña incorrecto</span>
                        <?php endif?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 centrar">
                        <div class="checkbox">
                            <label>
                          <input type="checkbox">Recordarme
                        </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 centrar">
                        <button type="submit" class="btn boton-ingreso">Iniciar sesión en Monsters, Inc.</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 centrar">
                        <a class="btn btn-info" href="<?php echo site_url("welcome/paginaprincipalInvitado") ?>" role="button">Ingresar como invitado</a>
                    </div>
                </div>
                <a class="centrar">¿Olvidaste tú contraseña?</a><br>
            </form>
        </div>
        <div class="row margen-1">
            <hr class="separador">
            <div class="col-sm-4 centrar">
                <a>Términos y condiciones</a><br>
                <a>Privacidad</a><br>
                <a>Derechos de Autor</a>
            </div>
        </div>
        <div class="row" style="text-align: center">
            <div class="col-sm-4 centrar">
                <p id="derecho-autor">2017 Monsters, Inc.</p>
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
