<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Editar Monstruo Monster Inc</title>

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
                <form name="form" action="<?php echo site_url("Welcome/editarMonstruo")?>" method="post">
                    <div class="row">
                    <h1>Editar registro</h1></div>
                    <div class="row">
                    <div class="col-md-3"><label for="id" >Numero de Usuario</label></div>
                     <div class="col-md-1"><input type="text" name="id" value="<?php echo $id ?>"readonly></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="usuario" >Usuario</label></div>
                     <div class="col-md-1"><input type="text" name="usuario" value="<?php echo $usuario ?>"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="edad" >Edad  </label></div>
                     <div class="col-md-1"><input type="number" name="edad" value="<?php echo $edad ?>"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="cumpleanos" >Fecha de cumpleaños  </label></div>
                     <div class="col-md-1"><input type="date" name="cumpleanos" value="<?php echo $cumpleanos ?>"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="puesto" >Puesto </label></div><div class="col-md-1"><select name="puesto">
                    <option value="Asustador" <?php if($puesto == "Asustador"){echo 'selected';} ?>>Asustador</option>
                    <option value="Administrador" <?php if($puesto == "Administrador"){echo 'selected';} ?>>Administrador</option>
                            </select></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="correo" >Correo electronico  </label></div>
                     <div class="col-md-1"><input type="email" name="email" value="<?php echo $email ?>"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-3"><label for="habilitado" >Status de Usuario </label></div>
                     <div class="col-md-6"><input type="radio" name="habilitado" value="1" checked> Habilitado
                                            <input type="radio" name="habilitado" value="0"> Deshabilitado</div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"><input  type="submit" class="btn btn-default" value="Actualizar datos"></div>
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
