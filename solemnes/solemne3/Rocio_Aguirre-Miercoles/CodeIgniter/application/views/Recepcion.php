<!DOCTYPE html>
<html lang="en">

<head>
    <title>Página principal</title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/assets/css/EstilosRecepcion.css" media="screen and (color)" rel="stylesheet">

    <style>
        @media (max-width: 1600px) {
            .col-xs-1 {
                height: 80px;
            }
        }
        
        @media (max-width: 1400px) {
            .col-xs-1 {
                height: 80px;
            }
        }
        
        @media (max-width: 1200px) {
            .col-xs-1 {
                height: 60px;
            }
        }

    </style>
</head>

<body>
    <?php session_start(); ?>
    <!--Inicia Menú superior-->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="<?php echo site_url("welcome/principal") ?>">
                    <img src="/assets/img/logo.jpg" alt="">
                </a>

            </div>

            <div id="navbar" class="navbar-collapse collapse" >
                <form class="navbar-form navbar-right" method="post" action="<?php echo site_url("welcome/busqueda")?>">
                    <input type="text" class="form-control" name= "palabra" placeholder="Buscar por nombre...">       
                    <input type="submit" value="Buscar" class="btn btn-info">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <?php if($_SESSION['user']) :?>
                        <li><a href="<?php echo site_url("welcome/formulario") ?>"><span class="glyphicon glyphicon-plus-sign"></span> Agregar Monstruo</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                    <?php endif ?>
                    
                    <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ayuda</a></li>
                    
                    <?php if($_SESSION['user']) :?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class= "glyphicon glyphicon-off"></span> Cerrar sesión</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Configuración de privacidad</a></li>
                            <li><a href="<?php echo site_url("welcome/index") ?>">Salir</a></li>
                        </ul>
                    </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--Inicia Tabla-->
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FOTO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $size; $i++){ $ID ="ID$i"; $nombre = "nombre$i"; $apellidos = "apellidos$i"; $email = "email$i";?>
                <tr>
                    <td>
                        <?php echo $i + 1 ?>
                    </td>
                    <td><img src="/assets/img/mike.png" style="width:80px" alt=""></td>
                    <td>
                        <?php echo $$nombre ?> 
                    </td>
                    <td>
                        <?php echo $$apellidos ?>
                    </td>
                    <td>
                        <?php echo $$email ?>
                    </td>
                    
                        <td><?php if($_SESSION['user']) :?>
                            <a class="btn btn-primary" href="<?php echo site_url("welcome/cargarDatosAFormulario") ?>/?id=<?php echo $$ID ?>" data-toggle="popover" data-placement="bottom" data-trigger='hover' title="Editar" data-content="Para editar información de perfil, clic aquí!">
                        <i class="glyphicon glyphicon-edit"></i></a>
                    <?php endif ?>
                        <a class="btn btn-success" href="<?php echo site_url("welcome/perfil") ?>/?id=<?php echo $$ID ?>" data-toggle="popover" data-placement="bottom" data-trigger='hover' title="Ver" data-content="Para ver información del monstruo, clic aquí!">
                            <i class="glyphicon glyphicon-eye-open"></i></a>
                    <?php if($_SESSION['user']) :?>
                        <button type="button" class="btn btn-danger" data-toggle="popover" data-placement="bottom" data-trigger='hover' title="Mensaje" data-content="Para enviar un mensaje, clic aquí!">
                        <i class="glyphicon glyphicon-envelope"></i></button></td>
                    <?php endif ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Termina Tabla-->

    <!---------------------------------Comienzan los scripts---------------------------------------------------------->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown()
        });

        $(function() {
            $('[data-toggle="popover"]').popover()
        })

    </script>

</body>

</html>
