<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/css/EstilosLogin.css">

    <style>
        @media (max-width: 1600px) {
            .col-xs-1 {
                height: 80px;
            }
        }
        
        @media (max-width: 1400px) {
            .col-xs-1 {
                height: 80px;
            }
        }
        
        @media (max-width: 1200px) {
            .col-xs-1 {
                height: 60px;
            }
        }
        
        .login {
            background-color: rgba(255, 255, 255, 0.6);
            height: 380px;
            width: 830px;
            border-radius: 10px;
        }
        
        #logotipo {
            background-image: url("http://www.stickpng.com/assets/images/58a7a24a5ad0fd0b7fdd33ce.png");
            background-size: cover;
            height: 210px;
            width: 330px;
            margin-top: 50px;
            margin-left: 10px;
        }
        
        .login .form {
            color: rgba(255, 255, 255, 1);
        }
        
        .centro {
            vertical-align: middle;
            padding-top: 150px;
            padding-right: 430px;
        }
        
        html,
        body {
            height: 100%;
            width: 100%;
        }
        
        #datos {
            margin-top: 20px;
            margin-left: 10px;
        }
        
        #lbl-noCuenta {
            font-size: 14px;
            font-family: monospace;
        }
        
        a {
            font-size: 14px;
            padding-left: 60px;
            color: darkslategray;
        }
        
        input[type=submit] {
            background-color: #0A5EB8;
            color: white;
            font-size: 16px;
            padding: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 400px;
            height: 30px;
        }
        
        input[type=submit]:hover {
            background-color: #579CE6;
        }
        
        #boton2 {
            color: white;
            font-size: 16px;
            padding: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 200px;
            height: 30px;
            margin-left: 200px;
        }
        
        #error{
            color:#F63307;
            font-size: 13px;
            font-family:inherit;
        }

    </style>

</head>

<body class="container">
    <div class="row centro">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="row login">
                <div class="col-xs-6" id="logotipo">
                </div>
                <div class="col-xs-6" id="datos">
                    <form class="form-horizontal" action="<?php echo site_url("welcome/logged") ?>" method="post">
                        <div class="form-group">
                            <label>Email: </label>
                            <label for="inputEmail" class="sr-only">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="usuario@gmail.com" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><br>
                            <?php if($error == true) :?>
                            <div class="error" id="error"><b>*Usuario y/o contraseña incorrecta</b></div>
                            <?php endif ?>
                        </div>
                        <div class="checkbox">
                            <label><b>
                                    <input type="checkbox">Recordarme
                                </b></label>&nbsp;
                            <a id="olvidar">¿Olvidaste tu contraseña?</a>
                        </div><br>
                        <div class="row boton">
                            <div class="col-xs-4">
                                <input type="submit" value="Iniciar sesión" id="boton">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-xs-4">
                                <a class="btn btn-info" role="button" id="boton2" href="<?php echo site_url("welcome/recepcionInvitado")?>">Ingresar como invitado</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
