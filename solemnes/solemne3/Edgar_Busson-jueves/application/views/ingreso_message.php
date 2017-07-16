<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ingreso nuevo Monster Inc</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/other.css')?>" />
    </head>

    <body class="container">
        <br>
        <div class="row centro">
            <div class="col-md-6 col-md-offset-1">
                <!--form action="/resultado.html" method="post"-->
                <form name="formularo" action="<?php echo site_url("Welcome/ingresoNuevo")?>" method="post">
                    <div class="row">
                    <h1>Formulario de registro</h1></div>
                    <div class="row">
                    <div class="col-md-3"><label for="usuario" >Nombre de Usuario</label></div>
                     <div class="col-md-1"><input type="text" name="usuario"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="edad" >Edad  </label></div>
                     <div class="col-md-1"><input type="number" name="edad"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="cumpleanos" >Fecha de cumpleaños  </label></div>
                     <div class="col-md-1"><input type="date" name="cumpleanos"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="puesto" >Puesto </label></div><div class="col-md-1"><select name="puesto">
                    <option>Asustador</option>
                    <option >Administrador</option>
                            </select></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="email" >Correo electronico  </label></div>
                     <div class="col-md-1"><input type="email" name="email"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="password" >Contraseña </label></div>
                    <div class="col-md-5"><input type="password" name="password"></div><div class="col-md-3"><button type="button" class="btn btn-default" data-toggle="popover" title="Popover" data-placement="right" id="popover" data-content="La contraseña se sugiere que contenga letras y números"><span class="glyphicon glyphicon-info-sign"></span></button></div>
                    <br>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><input type="submit" class="btn btn-default"></div>
                        <div class="col-md-2"><a type="button" class="btn btn-default" href="<?php echo site_url("welcome/showInicio")?>">Volver</a></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $('#popover')
            .popover({
                content:"Contenido 2"});
        </script>
        
    </body>

</html>
