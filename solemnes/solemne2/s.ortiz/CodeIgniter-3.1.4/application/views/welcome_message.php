<!DOCTYPE html>
<html>
<head>
    <?php 
    if($error = true): ?>
<script>
    alert("Usuario o contraseña son incorrectos");
</script>
<?php endif ?>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        body {
            background-image: url(http://2.bp.blogspot.com/-KMwSDEm4JNw/T6N2p6W1LiI/AAAAAAAACXw/XZETBrSH0wc/s1600/monsters-inc-77187.jpg);
            background-size: cover;
        }       
        .centrado {
            top: 20%;
            left: 30%;
            margin: 20% auto;
        }       
        .transparente {
            background-color: rgba(31, 225, 219, 0.2);
            border-radius: 20px;
        }      
        h1 {
            font-style: oblique;
            font-size: 100px;
        } 
        #login {
            font-size: 55px;
        }
        .letras {
            font-size: 15px;
        }
    </style>
</head>
<body class="container">
    <form action="<?php echo site_url("welcome/logged")?>" method="post">
        <div class="row centrado">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="row transparente">
                    <div class="row">
                        <div class="col-xs-1 col-xs-offset-3">
                            <label id="login">Login</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-2">
                            <label class="letras">Correo</label>
                            <div class="row">
                                &nbsp;
                            </div>
                            <label class="letras">Contraseña</label>
                        </div>
                        <div class="col-xs-2 col-xs-offset-1">
                            <input type="text" name="usuario" placeholder="Correo electronico">
                            <div class="row">
                                &nbsp;
                            </div>
                            <input type="password" name="contraseña" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="col-xs-2 col-xs-offset-4">
                            <input type="submit" class="btn btn-info" value="Acceder">
                        </div>
                    </div>
                    <div class="row">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
