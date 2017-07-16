<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('assest/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assest/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assest/EstiloRegistro.css') ?>">
        <title>Monsters inc</title>
    </head>
    <body>
        <div class="RegistroCuenta">
            <h1>Ingreso de datos</h1><br>
				 <form action="<?php echo site_url("Welcome/logged")?>" method="post">
                    <div>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div>
                        <input type="text" name="apellido" placeholder="Apellido" required>
                    </div>
                    <div>
                        <input type="text" name="correo" placeholder="Correo" required>
                    </div>
                    <div>
                        <input type="password" name="pass" placeholder="Constraseña" required>
                    </div>
                    <div>
                         <input type="password" name="pass" placeholder="Confirmar contraseña" required>
                    </div>
                    <div>
                        <input type="submit" name="registrar" class="registrar" value="Registrar">
                    </div>
                   <div>
                       
                    </div>
				</form>	
		  </div>
    </body>
</html>