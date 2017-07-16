<!DOCTYPE html>
<html>
    <head>
        <title>Pantalla De Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/estilos.css')?>">
        
    </head>
    <body>
        <div class="boxlogin">
            <div class="form-horizontal">
                <div align="center"><img class="img-circle" id="logo" src="<?php echo base_url('assets/logo-portal.png')?>">
                </div>
                <?php if($error):?>
                Nombre usuario o contraseña no validos
                <?php endif?>
                <form action="<?php echo site_url("welcome/logged")?>" method="post" name="form-login" id="form-login">
                    <label>Nombre de usuario</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                    <label>Contraseña</label>
                    <input type="password" name="password" id="password"  class="form-control" required>
                    <input type="submit" id="btn-ingresar" class="btn btn-success"
                           value="Ingresar">
                </form>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="<?php echo base_url('assets/bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script> 
        
        <script type="text/javascript">
        $(function () {
        $('.img-circle').popover({
        title: 'Nota',
        content: 'Este logo pertenece a un juego llamado Portal, el cual posee dos entregas.',
        placement: 'Right'
    });
});
</script>
    </body>
</html>