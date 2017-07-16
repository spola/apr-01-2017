<!DOCTYPE html>
<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Tabla de Registros</title>
    <style>
        body {
            background-image: url(https://v.cdn.vine.co/r/avatars/81AC66D88F1317713224002887680_5864135e761.7.0.jpg?versionId=I3T45EQtHIfAw.IAfxdkn6InbBXrvBob);
        }    
        .centrado {
            top: 20%;
            left: 40%;
            margin: 10% auto;
        }   
        .foto {
            font-size: 25;
        } 
        .tabla {
            background-color: rgba(255, 255, 255, .9);
        } 
        th {
            text-align: center;
            font: oblique bold 110% cursive;
        } 
        td {
            text-align: center;
            line-height: 30;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="col-xs-3 col-xs-offset-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Monsters%2C_Inc._logo.svg/2000px-Monsters%2C_Inc._logo.svg.png" class="img-responsive" alt="Responsive image">
        </div>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> Registro de monstruos </a>
            </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav  navbar-left">
                            <?php 
                             //session_start();
                             if($_SESSION['sesion'] == true){ 
                            ?>
                            
                            <li><a href="registrarse">Registrarse</a></li>
                            <li class="dropdown">
                            </li>
                            
                            <?php 
                             } 
                            ?>
                             <li><a href="logged">Logout</a></li>
                            <li class="dropdown"> </li>
                            
                        </ul>
                        <form method="post"  action="<?php echo site_url("Welcome/buscar")?>"> 
                        <?php  if($_SESSION['sesion'] == true){ ?>
                        <input type="text" placeholder="Buscar" name="cualbuscar">
                        <button type="submit" class="btn btn-info navbar-btn"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        <?php } ?> </form> 
                       
                    </div>
        </div>
    </nav>
    <div class="row centrado">
        <div class="col-xs-8 col-xs-offset-2 tabla">
            <table class="table table-responsive">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Area de trabajo</th>
                    <th>Pasatiempos</th>
                    <th>Correo</th>
                </tr>
                    <?php 
                    $cuanto = count($nombre);
                    for($x=0;$x<$cuanto;$x++){
                        ?>
                        <tr>
                            <td> <?php echo $nombre[$x] ?> </td>
                            <td> <?php echo $apellido[$x] ?> </td>
                            <td><?php echo $area[$x] ?></td>
                            <td><?php echo $pasatiempos[$x] ?></td>
                            <td><?php echo $correo[$x] ?></td>
                            <td><?php 
                    //session_start();
                    if($_SESSION['sesion'] == true){ ?>
                    <a href="<?php echo site_url("Welcome/modificar/?mono=$id[$x]")?>"> <input type="button" class="btn btn-info" value="Modificar"> </a> </td>
                    <?php  } ?>
                        </tr>
                <?php
                    }
                ?>
               
            </table>
        </div>
    </div>
</body>
</html>
