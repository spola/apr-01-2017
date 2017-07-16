<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/paginaprincipal.css')?>" />
    <title>Página principal</title>
</head>

<body>
    <?php session_start();$_SESSION['admin'];?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                <a class="navbar-brand" href="<?php echo site_url("welcome/paginaprincipal")?>">
                    <img src="../../assets/img/logoBrand.png" style="height: 20px" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Página principal</a></li>
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
                    <li><img src="../../assets/img/mike.jpg" class="redondeo" style="height: 50px" alt=""></li>
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
        <h1><b>Tabla de registros</b></h1>
        <table class="table table-hover" id="opacidad">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Ocupación</th>
                    <?php if($_SESSION['admin'] != 0) :?>
                    <th>Acciones</th>
                    <?php endif ?>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $tamano; $i++){
                                                        $nombre = "nombre$i";
                                                        $apellido = "apellido$i";
                                                        $ocupacion = "ocupacion$i";
                                                        $id = "id$i";
                ?>
                <tr>
                    <td><?php echo $$nombre ?></td>
                    <td><?php echo $$apellido ?></td>
                    <td><?php echo $$ocupacion ?></td>
                    <?php if($_SESSION['admin'] != 0) :?>
                    <td>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-primary" data-toggle="popover" data-placement='auto' title="Mensaje" data-content="Si deseas enviar un mensaje sólo da clic en este botón" data-trigger='hover'> 
                                    <i class="glyphicon glyphicon-envelope"></i>
                                </button>
                            <button type="button" class="btn btn-default" data-toggle="popover" data-placement='auto' title="Asignar tarea" data-content="Haz clic en el botón para asignar una tarea" data-trigger='hover'><i class="glyphicon glyphicon-edit"></i></button>
                            <button type="button" class="btn btn-default" data-toggle="popover" data-placement='auto' title="Descargar" data-content="Descarga la información acerca de lo que realiza esta persona" data-trigger='hover'>
                                    <i class="glyphicon glyphicon-download-alt"></i>
                                </button>
                        </div>
                    </td>
                    <?php endif ?>
                    <td>
                        <a class="btn btn-info glyphicon glyphicon-info-sign" href="<?php echo site_url("welcome/perfil") ?>/?id=<?php echo $$id ?>" role="button" data-toggle="popover" data-placement='left' title="¡Saludos!" data-content="Si deseas ver la información de esta persona solo da clic en este botón" data-trigger='hover'></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
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
