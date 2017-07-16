<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenido</title>
        
	    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url("estilo/css/login.css")?>">

    </head>
    <body class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo site_url("Mounstro/buscarMounstros")?>">Monster Inc</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo site_url("Mounstro/mostrarPaginaRegistro")?>">Registro de mounstros</a></li>
                    <li><a href="<?php echo site_url("Mounstro/mostrarPagEdicionMounstro")?>">Editar un mounstro</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url("welcome/egreso")?>"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-xs-12">
                <h1>Mounstros registrados</h1>
                <div class="table-responsive">
                    <table class="table table-stripped" id="buscarEnTabla">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>Área de trabajo</th>
                                <th>Fecha de contratación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($mounstrosRegistrados as $clave) {?>
                                <tr>
                                    <td>
                                        <?= $clave->mou_id;?>
                                    </td>
                                    <td>
                                        <?= $clave->mou_nombre;?>
                                    </td>
                                    <td>
                                        <?= $clave->mou_especialidad;?>
                                    </td>
                                    <td>
                                        <?= $clave->mou_area_trabajo;?>
                                    </td>
                                    <td>
                                        <?= $clave->mou_fecha_contratacion;?>
                                    </td>
                                </tr>
                            <?php };?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../../estilo/js/jquery.js"></script>
        <script src="../../estilo/js/jquery.dataTables.min.js"></script>
        
        <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    "language": {
                        "search" : "Buscar:"
                    }
                } );
            } );
            
            
            $.extend( true, $.fn.dataTable.defaults, {
                "ordering": false,
                "info" : false,
                "paginate": false
            } );
            
            
            
            
            $(document).ready(function() {
                $('#buscarEnTabla').DataTable();
                } );
        </script>
    </body>
</html>