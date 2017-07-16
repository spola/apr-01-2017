<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Monster Inc</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        body {
    background-image: url(/MI-personajes2.jpg);
    background-size: cover;
    background-attachment: fixed;
}
button[type="submit"] 
        {
                font-size: 18px;
                border-radius: 10px;
                width: 75px;
                height: 40px;
        }
.login {
    background-color: rgba(230, 233, 240, 0.4);/*(221, 228, 229, 0.8);*/
    border-radius: 20px;
    color: #E5EBE7;/*#E1E5E2;/*#A8B3C9;*/
    
    font-family: "Monster AG", sans-serif;
    /*  color: #20207D; /*darkblue;/*#293883;*/
    text-shadow: #05093F 0.3em 0.3em 0.3em;
    font-size: 20px;    
    /*font-weight: bold;*/
}
label{
   
    font-size: 20px;
}

html, body {
    height: 100%;
    width: 100%;
}
body {
    display: table;
}
.centro {
    display: table-cell;
    vertical-align: middle;
}
.vertical-centered-text{
    vertical-align: bottom;
  }
.texto{
    font-size: 16px;
        }

    </style>
    
    </head>
    <body class="container">

        <div class="row centro">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="row login">
                    <div class="col-xs-12">
                        <div class="row">
                             <h1  style="text-align:center">Ingreso de usuario</h1></div>
                        
                            <div class="row texto" style="text-align:center">¿No tienes cuenta? <a href="<?php echo site_url("welcome/cargaRecepcionInvitado")?>"> Ingresa como invitado</a></div> 
                            
                        <form action="<?php echo site_url("welcome/logged")?>" method="post"> <!--action="recepcion.html" method="post"-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="checkbox">
                                <label style="font-size:18px">
                                    <input type="checkbox"> No me olvides
                                </label>
                            </div>
                            <center>
                                <button type="submit" class="btn btn-default">Entrar</button>
                            </center>
                        </form>
                        <?php if($error) :?>
                        Nombre usuario o contraseña inválido
                        <?php endif?>
                        <div class="row">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

</html>
