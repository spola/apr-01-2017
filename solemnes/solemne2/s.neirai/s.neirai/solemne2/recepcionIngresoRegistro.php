<?php
if((isset($_POST['nombreEmpleado'])) && (isset($_POST['apellidoEmpleado'])) && (isset($_POST['cargoUno'])) && (isset($_POST['email'])))
{

    $nombre = $_POST['nombreEmpleado'];
    $apellido = $_POST['apellidoEmpleado'];
    $cargaUno = $_POST['cargoUno'];
    $email = $_POST['email'];
    if(isset($_POST['nombreEmpleado']))
       {
        $cargaDos = $_POST['cargoDos'];
       }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Resultado del registro de empleados</title>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/ingresoRegistro.css">
    </head>
    <body class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $nombre;?></li>
                    <li class="list-group-item"><?php echo $apellido;?></li>
                    <li class="list-group-item"><?php echo $email;?></li>
                    <li class="list-group-item"><?php echo $cargaUno;?></li>
                    <li class="list-group-item"><?php echo $cargaDos;?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-5 col-xs-7">
                <button type="button" class="btn btn-danger" onclick="logout()">Salir</button>
                <button type="button" class="btn btn-info" onclick="pagAnterior()">Volver a la página anterior</button>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            var url = "http://localhost/solemne2/login.html";
            function logout()
            {
                window.location = url;
            }
        </script>
        <script>
            var urls = "http://localhost/solemne2/ingresoRegistro.html";
            function pagAnterior()
            {
                window.location = urls
            }
        </script>
    </body>
</html>