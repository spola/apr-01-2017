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
                    <div class="panel panel-info" style="margin-top:30px;">
                        <div class="panel-heading">
                            <h4 class="text-center">Monster Inc</h4>
                        </div>
                        <div class="panel-body">
                            <form >
                                <div class="form">
                                    <label class="Nombre">Nombre</label>
                                    <input type="text" class="form-control" name="Nombre" placeholder="Ingrese nombre" required><br>
                                </div>
                                <div class="form">
                                    <label class="usuario">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="FechaNacimiento" placeholder="dd/mm/aaaa" required><br>
                                </div>
                                <div class="form">
                                    <label class="Ciudad">Ciudad</label>
                                    <input type="text" class="form-control" name="Ciudad" placeholder="Ingrese su ciudad" required><br>
                                </div>
                                <div class="form">
                                    <label class="correo">Correo electronico</label>
                                    <input type="email" class="form-control" name="correo" placeholder="Ingrese Correo" required><br>
                                </div>
                                <div class="form">
                                    <label class="Nacionalidad">Puesto Trabajo</label>
                                    <input type="text" class="form-control" name="nacionalidad" placeholder="Ingrese su puesto de trabajo" required><br>
                                </div>
                                <div class="col-md-4 col-md-offset-3">
                                    <button type="submit" name="ingresar" class="ingresar">Registrar</button><br>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" name="salir" class="salir"><a href="<?php echo site_url("Welcome/Logged")?>"/>Salir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
