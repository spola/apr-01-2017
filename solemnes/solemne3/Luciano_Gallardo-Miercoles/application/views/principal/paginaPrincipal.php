<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/assets/CssIndex.css">
    </head>
    <body>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Monster Inc</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Registros</a></li>
                            <li ><a href="<?php echo site_url('paginaRegistro/paginaRegistro')?>">Registrar</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <seccion class="contenedor">
            <div>
                <h1 class="Titulo1">Tabla de registros</h1>
            </div>
            <div class="contenedor table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Luciano</td>
                                <td>Gallardo</td>
                                <td>Lucianofrancisco1998@hotmail.com</td>
                                <td>
                                <div class="dropdown">
                                        <button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Opciones<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Copiar</a></li>
                                            <li><a href="#">Editar</a></li>
                                            <li><a href="#">Eliminar</a></li>
                                        </ul>
                                </div>
                                
                                </td>
                            </tr>
                            <tr>
                                <td>Esteban</td>
                                <td>Fabio</td>
                                <td>EstbanFabio200@hotmail.com</td>
                                <td>
                                <div class="dropdown">
                                        <button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Opciones<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Copiar</a></li>
                                            <li><a href="#">Editar</a></li>
                                            <li><a href="#">Eliminar</a></li>
                                        </ul>
                                </div>
                                
                                </td>
                            </tr>
                                <tr>
                                    <td>Marco</td>
                                    <td>Rivas</td>
                                    <td>kako__x@gmail.com</td>
                                    <td>
                                    <div class="dropdown">
                                        <button class="btn  btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Opciones<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Copiar</a></li>
                                            <li><a href="#">Editar</a></li>
                                            <li><a href="#">Eliminar</a></li>
                                        </ul>
                                    </div>
                                
                                </td>
                                </tr>
                            <tr >
                                <td>Elias</td>
                                <td>Elflamer</td>
                                <td>SoyFlamer_ctm@chupalo.com</td>
                                <td>
                                <div class="dropdown">
                                        <button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Opciones<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu"  aria-labelledby="dropdownMenu1">
                                            <li><a href="#">Copiar</a></li>
                                            <li><a href="#">Editar</a></li>
                                            <li><a href="#">Eliminar</a></li>
                                        </ul>
                                </div>
                                
                                </td>
                            </tr>
                            
                            <tr>
                            </tr>
                        </tbody>
                    </table>
          </div>  
        </seccion>
       
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>
    </body>
</html>