<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>Registros</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/estilosPaginaPrincipal.css')?>">
        
    </head>
    <body>
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url("paginaPrincipal/mostrar")?>"><img alt="Brand" id="logo" src="<?php echo base_url('assets/logo-portal-20x20.png')?>"></a>
       <label id="nombreLogo"><i>Aperture Laboratories</i></label>
    </div>
      
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Registros<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo site_url("welcome/register")?>">Registrar</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Busqueda">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
        <ul class="nav navbar-nav navbar-right">
        <li ><a href="<?php echo site_url("welcome/logout")?>">Cerrar Sesion</a></li>
      </ul>
    </div>
  </div>
</nav>
        <h1 align="center"><i><b> Tabla de Registros</b></i></h1>
        <p align="center"><b>Se presenta una tabla con registros de monstruos</b></p>
        <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apodo</th>
        <th>Correo Electronico</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script>
    </body>
</html>    