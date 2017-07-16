<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Base de registros Monster Inc</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/inicio.css')?>" />
    
    </head>

    <body class="container">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo site_url("welcome/showInicio")?>">Monster Incorporated</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a id="opcion" href="<?php echo site_url("welcome/showIngreso")?>">Ingresar nuevo</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="<?php echo site_url("welcome/buscarMonstruo")?>" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar" name="nombreBuscar">
              </div>
                <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <div class="navbar-form navbar-right"><a href="<?php echo site_url("welcome/index")?>"><button class="btn btn-danger">Salir</button></a></div>
          </div>
        </nav>
        <div class="row centro">
            <div class="col-md-8 col-xl-offset-4">
                <table class="table table-hover">
                    <thead>
                    <h2>
                        <tr class="">
                        <td><label for="usuario" >Usuario </label></td>
                        <td><label for="edad" >Edad  </label></td>
                         <td><label for="cumple" >Fecha de nacimiento </label></td>
                        <td><label for="status" >Puesto </label></td>
                        <td><label for="correo" >Correo electrónico </label></td>
                        </tr>
                        </h2>
                    </thead>
                    <tbody>            
                        <?php
                       for ($indice = 0; $indice<$size; $indice++){
                            $usuario = "usuario$indice";
                            $edad = "edad$indice";
                            $cumpleanos="cumpleanos$indice";
                            $puesto="puesto$indice";
                            $email = "email$indice";
                            $id = "id$indice";?>
                        <tr>
                          <td><?php echo $$usuario ?></td>
                          <td><?php echo $$edad ?></td>
                          <td><?php echo $$cumpleanos ?></td>
                          <td><?php echo $$puesto ?></td>
                          <td><?php echo $$email ?></td> <!--indice +1-->
                          <td><a href="showPerfil/?id=<?php echo $$id ?>"><button type="button" class="btn-default" >Editar</button></a></td>
                        </tr>
                         <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
