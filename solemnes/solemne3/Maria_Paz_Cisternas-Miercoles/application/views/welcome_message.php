<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monster Inc</title>
    <meta name="description" content="Corporacion de energía especializada en sustos!" />
    <link rel="shortcut icon" href="css/Imagenes/favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="css/login.css">


</head>

<body>
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>Registrarse</h1>

                <form action="/" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                Nombre de Usuario<span class="req">*</span>
              </label>
                            <input name="user" type="text" required autocomplete="off" />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label>
              Email <span class="req">*</span>
            </label>
                        <input type="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
              Contraseña <span class="req">*</span>
            </label>
                        <input type="password" required autocomplete="off" />
                    </div>

                    <button type="submit" class="button button-block">Registrar</button>

                </form>

            </div>

            <div id="login">
                <h1>Bienvenido</h1>

                <h2>Por favor inicie Sesión</h2>
                <?php 
    if(!isset($_SESSION['userid']))
    {
        if(isset($_POST['login']))
        {
            if(verificar_login($_POST['user'],$POST['pass'],$resp)==1)
            {
                $_SESSION['userid'] = $resp->idUsuario;
                header("location.index.php")
            }
            else
            {
                echo 'Usuario o contraseña invalida';
            }
        }
    }
?>
                <form action="/" method="post">

                    <div class="field-wrap">
                        <label>
              Nombre de Usuario <span class="req">*</span>
            </label>
                        <input name="user" type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
              Contraseña <span class="req">*</span>
            </label>
                        <input name="pass" type="password" required autocomplete="off" />
                    </div>

                    <p class="forgot"><a href="#">Olvido su contraseña?</a></p>

                    <button class="button button-block">Entrar</button>

                </form>
                <?php
                echo 'Ingreso satisfactorio';
                echo '<a href="logout.php">Logout</a>';
?>
            </div>
            S
        </div>
        <!-- tab-content -->

    </div>
    <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>