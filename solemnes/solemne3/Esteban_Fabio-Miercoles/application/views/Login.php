<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-3.3.7-dist/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/bonito.css')?>">
    </head>

    <body>
        <div class="contenedor">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-info" style="margin-top:50px;">
                        <div class="panel-heading">
                            <h4 class="text-center">Monster Inc</h4>
                            <center><img src="<?php echo base_url('/assets/img/imagen.jpg')?>" width="100" height="100"></center>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo site_url("Welcome/logged")?>" method="get">
                                <div class="form">
                                    <label form="usuario" class="Usuario">Usuario</label>
                                    <input name = "Usuario" type="text" class="form-control" class="usuario" placeholder="Ingrese usuario" required><br>
                                </div>
                                <div class="form">
                                    <label form="contraseña" class="Contraseña">Contraseña</label>
                                    <input name="Contraseña" type="password" class="form-control" clas="contraseña" placeholder="Ingrese Contraseña" required><br>
                                </div>
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" name="ingresar" class="ingresar">Ingresar</button>
                                </div>
                            </form>
                            <?php if($error):?>
                            usuario o contraseña invalida
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
