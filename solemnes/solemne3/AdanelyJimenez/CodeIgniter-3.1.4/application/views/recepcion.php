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
    /*background-image: url(MI-Recepcion.jpg);*/
    background-image: url(http://localhost:8585/CodeIgniter-3.1.4/MI-Recepcion.jpg);
    background-size: cover;
    background-attachment: fixed;
}
.login {
    background-color: rgba(221, 228, 229, 0.6);
    font-family: "Monster AG", sans-serif;
    border-radius: 20px;
    color: darkblue;/*#293883;*/
    text-shadow: gainsboro 0.3em 0.3em 0.3em;
    font-size: 20px;
    /*font-weight: bold;*/
}
.login p,
.login .form
{
    color: rgba(255, 255, 255, 1);
    /*font-weight: bold;*/
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

b{
    font-family: "Monster AG", sans-serif;
    color: black;
    font-size: 20px;
}

label{
    
    color: black;
    font-size: 20px;
}

.thead{
    background-color: black;
    color: white;
} 
tr{
    background-color: rgba(231, 231, 231, 0.4);
    
        }

    </style>
    
    </head>
    
    <body class="container">
        
 <!--inicio de sesion como invitado-->
        
        <div class="container-fluid">
<div class="row">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header col-xs-3">
        <ul class="nav navbar-nav" data-toggle="tooltip" data-placement="bottom" title="Carga registros">
      <a class="navbar-brand" href="cargaRecepcion"><b style="color:rgb(245,245,245);">Monster INC</b></a>
            </ul>
    </div>
    <div class="col-xs-2">
        <?php if($_SESSION['invitado']) :?>
    <ul class="nav navbar-nav" data-toggle="tooltip" data-placement="bottom" title="Ingreso de nuevo monstruo">
      <li><a href="<?php echo site_url("Welcome/IngresoDeMonstruo") ?>">Nuevo monstruo</a>
      <!--<a href="IngresoMonstruo.html">Nuevo monstruo</a>-->  
      </li>
    </ul>
        <?php endif ?>
    </div>
    <div class="col-xs-5">
      <form class="navbar-form navbar-left" action="<?php echo site_url("welcome/buscaMonstruo")?>" method="post">
  <div class="input-group">
    <input name="nombreMB" type="text" class="form-control" placeholder="Busca por nombre">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
    </div>
    <div class="col-xs-2">
        <?php if($_SESSION['invitado']) :?>
        <!--<a href="login.html">-->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url("Welcome/index") ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
        <?php endif ?>
    </div>
  </div>
</nav>
</div>
<div class="row">&nbsp;</div>           
<div class="row"><label>Registros</label></div>
<div class="row">
 <table class="table">
  <thead class="thead">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Email</th>
      <th>Edición de perfil</th>
    </tr>
  </thead>
  <tbody>
      <?php for ($indice = 0; $indice<$size; $indice++){
            $ID = "ID$indice";
            $nombre = "Nombre$indice";
            $apellidos = "Apellidos$indice";
            $email = "Email$indice";?>
    <tr>
      <td><?php echo $indice +1 ?></td>
      <td><?php echo $$nombre ?></td>
      <td><?php echo $$apellidos ?></td>
      <td><?php echo $$email ?></td> <!--indice +1-->
      <td><a href="cargaInformacion/?id=<?php echo $$ID ?>">@<?php echo $$nombre ?>Perfil</a></td>
    </tr>
      
     <?php } ?>
     <!--<tr>
      <th scope="row">1</th>
      <td>James P.</td>
      <td>Sullivan</td>
      <td>Asustador</td>
      <td><a href="registroSulley">@SulleyPerfil</a></td>
         <!-- <td><a href="MI-informacion.html">@SulleyPerfil</a></td> -->
    <!--</tr>-->
    <!--<tr>
      <th scope="row">2</th>
      <td>Mike</td>
      <td>Wazowski</td>
      <td>Asistente asustador</td>
      <td><a href="#">@WazoPerfil</a></td>
    </tr> -->
  </tbody>
            </table>
            </div>
            
            
            
        </div>
    
        
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
         <script type="text/javascript">
            $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
             
        </script>
        
    </body>

</html>
