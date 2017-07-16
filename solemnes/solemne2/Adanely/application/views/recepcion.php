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
    <!--
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" /> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        body {
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
        <div class="container-fluid">
<div class="row">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header col-xs-2">
      <a class="navbar-brand" href="#"><b style="color:rgb(245,245,245);">Monster INC</b></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
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
      <th>Nombre de usuario</th>
      <th>Información de perfil</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">1</th>
      <td>James P.</td>
      <td>Sullivan</td>
      <td>@Sulley</td>
      <td><a href="registroSulley">@SulleyPerfil</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mike</td>
      <td>Wazowski</td>
      <td>@WazoWazo</td>
      <td><a href="#">@WazoWazoPerfil</a></td>
    </tr>
     </tbody>
            </table>
            </div>
            
            
            
        </div>
    
        
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

</html>
