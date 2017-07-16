<!DOCTYPE html>
<html>
<head>
    <title>Modificar mounstro</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        .centrado {
            top: 20%;
            left: 30%;
            margin: 10% auto;
        }    
        body {
            background-image: url(https://lumiere-a.akamaihd.net/v1/images/image_45070505.jpeg);
            background-size: cover;
        }    
        .trasnparente {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 5;
        }
    </style>
</head>
<body>
    <form action="<?php echo site_url("Welcome/guardarModificado")?>" method="post">
        <div class="row centrado">
            <div class="col-xs-6 col-xs-offset-3 trasnparente">
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Monsters%2C_Inc._logo.svg/2000px-Monsters%2C_Inc._logo.svg.png" class="foto" width="250" alt="250">
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-1">
                        <label>Nombre</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Apellidos</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Area</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Pasatiempos</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Correo electronico</label>
                        <div class="row">
                            &nbsp;
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
                        <div class="row">
                            &nbsp;
                        </div>
                        <input type="text" name="apellido" placeholder="Apellidos" value="<?php echo $apellido ?>">
                        <div class="row">
                            &nbsp;
                        </div>
                        <select name="area">
                            <?php 
                                if($area == "Asustador"){
                                    ?>
                                <option value="Asustador" selected >Asustador</option>
                                <option value="Papeleo" >Papeleo</option>
                                <option value="Puertero" >Puertero</option>
                                <option value="Visitante" >Visitante</option>
                            <?php } ?>
                            <?php 
                                if($area == "Papeleo"){
                                    ?>
                            
                                <option value="Asustador" >Asustador</option>
                                <option value="Papeleo" selected >Papeleo</option>
                                <option value="Puertero" >Puertero</option>
                                <option value="Visitante" >Visitante</option>
                            <?php } ?>
                            <?php 
                                if($area == "Puertero"){
                                    ?>
                                <option value="Asustador">Asustador</option>
                                <option value="Papeleo" >Papeleo</option>
                                <option value="Puertero" selected>Puertero</option>
                                <option value="Visitante" >Visitante</option>
                            <?php } ?>
                            <?php 
                                if($area == "Visitante"){
                                    ?>
                                <option value="Asustador" >Asustador</option>
                                <option value="Papeleo" >Papeleo</option>
                                <option value="Puertero" >Puertero</option>
                                <option value="Visitante" selected>Visitante</option>
                            <?php } ?>
                            
                        </select>
                        <div class="row">
                            &nbsp;
                        </div>
                        <textarea class="form-control" rows="2" cols="15" name="pasatiempos" value="" ><?php echo $pasatiempos ?></textarea>
                        <div class="row">
                            &nbsp;
                        </div>
                        <input type="email" placeholder="mounstro.1234@minc.com" name="correo" value="<?php echo $correo ?>" >
                        <div class="row">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['mono']; ?>" />
                <div class="row">
                    <div class="col-xs-1 col-xs-offset-4">
                        <a href="<?php echo site_url("Welcome/guardarModificado")?>"><input type="submit" class="btn btn-primary" value="Guardar" name="registro"></a>
                    </div>
                </div>

                <div class="row">
                    &nbsp;
                </div>
            </div>
  </div>
    </form>
</body>
</html>