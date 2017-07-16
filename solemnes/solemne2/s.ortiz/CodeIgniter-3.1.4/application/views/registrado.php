<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Regitrado!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        body {
            background-image: url(https://s-media-cache-ak0.pinimg.com/736x/11/5e/ac/115eac5cd7268d347411af30d57c0746.jpg);
            background-size: cover;
        }  
        .centrado {
            top: 20%;
            left: 30%;
            margin: 15% auto;
        }    
        .transparente {
            background-color: rgba(162, 228, 244, 0.5);
            border-radius: 10px;
        }  
        label {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <form action="<?php echo site_url("Welcome/logged")?>" method="post">
        <div class="row">
            &nbsp;
        </div>
        <div class="row">
            <div class="col-xs-2 col-xs-offset-10">
                <input type="submit" value="Logout" class="btn btn-info">
            </div>
        </div>
       <div class="row centrado">
            <div class="col-xs-6 col-xs-offset-3 transparente">
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-3">
                        <h1>Registrado!</h1>
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="col-xs-3 col-xs-offset-1">
                    <label>Nombre</label>
                    <br>
                    <label>Area</label>
                    <br>
                    <label>Pasatiempos</label>
                    <br>
                    <br>
                    <br>
                    <label>Mounstro?</label>
                    <br>
                    <label>Correo</label>
                </div>
                <div class="col-xs-1">
                    <label>:</label>
                    <br>
                    <label>:</label>
                    <br>
                    <label>:</label>
                    <br>
                    <br>
                    <br>
                    <label>:</label>
                    <br>
                    <label>:</label>
                </div>
                <div class="col-xs-7">
                    <label> <?php echo $nombre ?> </label>
                    <br>
                    <label> <?php echo $area ?></label>
                    <br>
                    <label> <?php echo $pasatiempos ?></label>
                    <br>
                    <br>
                    <br>
                    <label><?php echo $mounstro ?> </label>
                    <br>
                    <label><?php echo $correo ?> </label>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    &nbsp;
                </div>
            </div>
        </div>
    </form>
</body>
</html>
