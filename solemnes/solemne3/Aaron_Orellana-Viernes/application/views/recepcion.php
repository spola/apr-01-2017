<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
    <!doctype HTML>
    <html>

    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>" />

        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('estilos/estiloinicio.css')?>" />
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
            </button>
                <a class="navbar-brand" href="inicio.html">Inicio</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Registrados <span class="sr-only">(current)</span></a></li>
                    <li><a href="registro.html">Registrarse</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login1.html" class="glyphicon glyphicon-share">Salir</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <h3>Registrados</h3>
        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>