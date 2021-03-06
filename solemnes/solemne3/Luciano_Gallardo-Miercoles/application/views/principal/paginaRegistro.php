<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"
              >
        <link rel="stylesheet" href="/assets/CssPaginaRegistro.css">
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
                            <li ><a href="paginaPrincipal.html">Registros</a></li>
                            <li class="active"><a href="#">Registrar</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <seccion class="contenedor">
            <div>
                <h1 class="Titulo1">Registrar</h1>
            </div>
            <form action="guardar.php"  method="post"class="form-horizontal" >
                <fieldset>
                    <legend>Formulario</legend>

                    <div class="form-group" >
                        <label class="col-xs-5 control-label" for="textinput">Nombre :</label> 
                            <div class="col-xs-5">
                                <input  name="Nombre" type="text" placeholder="Nombre" class="form-control input-md">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-5 control-label" for="textinput">Apellido :</label>  
                        <div class="col-xs-5">
                            <input  name="Apellido" type="text" placeholder="Apellido" class="form-control input-md">  
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-5 control-label" for="textinput">Email :</label>  
                            <div class="col-xs-5">
                                <input  name="Email" type="email" placeholder="Email" class="form-control input-md"> 
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-5 control-label" for="textinput">Fecha de nacimiento:</label>  
                            <div class="col-xs-5">
                                <input  name="Fecha" type="date"  class="form-control input-md"> 
                            </div>
                    </div>

                   

                    <div class="form-group">
                        <div class="btn-lg">
                            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </seccion>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>
    </body>
</html>