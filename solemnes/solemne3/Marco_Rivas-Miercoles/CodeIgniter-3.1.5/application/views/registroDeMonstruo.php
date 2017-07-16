<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registro de monstruos</title>
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
        <li><a href="<?php echo site_url("paginaPrincipal/mostrar")?>">Registros<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo site_url("welcome/register")?>">Registrar</a></li>
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
        <div><?php if(isset($mensaje)):?>
<div class="alert alert-info">
    <?php echo $mensaje?>
</div>
<?php endif?>
<?php if(isset($error)):?>
<div class="alert alert-danger">
    <?php echo $error?>
</div>
<?php endif?>
        </div>
    <div id="registroMonstruo">
        <div class="jumbotron">
                <div class="form-horizontal">
                    <form action="<?php echo site_url("welcome/registrado")?>" method = "post" name="form-registrar_mounstro" id="form-registrar_mounstro">
                        <label>Nombre</label>
                        <input type="text" name="nombre" id="name" class="form-control" required>
                        <label>Apodo</label>
                        <input type="text" name="apodo" id="apodo" class="form-control" required>
                        <label>Tipo de mounstro</label>
                        <select name="raza" id="tipodemounstro" class="form-control" required>
                            <option>Raza 1</option>
                            <option>Raza 2</option>
                            <option>Raza 3</option>
                        </select>
                        <label>Email de contacto</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="fechedenacimiento" id="fechedenacimiento" class="form-control" required>
                        <input type="submit" class="btn btn-success" value="Registrar">
                    </form>
               </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js')?>"></script> 
    </body>
</html>    