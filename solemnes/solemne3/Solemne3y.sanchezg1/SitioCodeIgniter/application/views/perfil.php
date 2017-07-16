<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/perfil.css')?>" />

    <title>Perfil
        <?php echo $nombre ?>
        <?php echo $apellidos ?>
    </title>
</head>

<body>
    <?php session_start() ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                <a class="navbar-brand" href="<?php echo site_url("welcome/paginaprincipal") ?>">
                    <img src="/assets/img/logoBrand.png" style="height: 20px" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url("welcome/paginaprincipal") ?>">Página principal</a></li>
                    <li class="active"><a>Perfil <?php echo $nombre ?> <?php echo $apellidos ?></a></li>
                </ul>
                <form class="navbar-form navbar-left" method="post" action="<?php echo site_url("welcome/resultadoBusqueda") ?>">
                    <div class="form-group">
                        <input name="buscar" type="text" class="form-control" placeholder="Buscar por nombre">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php if($_SESSION['admin'] != 0) :?>
                    <li><a href="<?php echo site_url("welcome/registro")?>">Registrar nuevo monstruo</a></li>
                    <li><img src="../../../assets/img/mike.jpg" class="redondeo" style="height: 50px" alt=""></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mike Wazowski <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ver perfil</a></li>
                            <li><a href="#">Tareas</a></li>
                            <li><a href="#">Configuración de privacidad</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://localhost:8090">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    <?php endif ?>
                    <?php if($_SESSION['admin'] == 0) :?>
                    <li><a href="http://localhost:8090">Ingresar</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 centrar-texto">
                <img src="/assets/img/mike.jpg" class="foto-perfil" alt="" style="height: 120px"><br>
                <h1>
                    <?php echo $nombre ?>
                    <?php echo $apellidos ?>
                </h1>
                <h4>
                    <?php echo $puesto ?>
                </h4>
                <?php if($_SESSION['admin'] != 0) : ?>
                <a class="btn btn-info" href="<?php echo site_url("welcome/editar") ?>/?id=<?php echo $_GET['id'] ?>" role="button" style="margin-bottom: 10px;">Editar perfil</a>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="container margen-arriba">
        <div class="row centrar-texto">
            <span class="glyphicon glyphicon-user titulos-rectangulos" style="margin-top: 10px"></span>
            <span class="titulos-rectangulos"><b>Información personal</b></span>
            <hr class="separador">
        </div>
        <div class="row letra-contenido" style="margin-left: 20px">
            <div class="col-md-3">
                <span>FDN: <?php echo $fdn ?></span>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <span>Nacionalidad: <?php echo $pais ?></span>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <span>Sexo: <?php echo $sexo ?></span>
            </div>
        </div>
        <hr class="separador">
        <div class="row letra-contenido separacion-letras-contenido" style="margin-left: 20px;">
            <div class="col-md-3">
                <span>Email: <?php echo $email ?></span>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <span>Teléfono: <?php echo $telefono ?></span>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <span>Celular: <?php echo $celular ?></span>
            </div>
        </div>
    </div>
    <div class="container margen-arriba">
        <div class="row centrar-texto">
            <span class="glyphicon glyphicon-user titulos-rectangulos" style="margin-top: 10px"></span>
            <span class="titulos-rectangulos"><b>Información adicional</b></span>
            <hr class="separador">
        </div>
        <div class="row letra-contenido separacion-letras-contenido" style="margin-left: 20px">
            <div class="col-md-10 col-md-offset-1">
                <span>
                    <?php echo $comentarios ?>
                </span>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown()
        });
        $('[data-toggle="popover"]').popover();

    </script>
</body>

</html>
