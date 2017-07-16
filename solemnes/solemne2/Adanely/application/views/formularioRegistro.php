<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        body {
    background-image: url(http://localhost:8585/CodeIgniter-3.1.4/Mi-registro.png);
    background-size:cover;
    background-attachment: fixed;
}
.vertical-centered-text{
    vertical-align: bottom;
  }
 button[type="submit"] 
        {
                font-size: 20px;
                border-radius: 10px;
                font-family: sans-serif;
                width: 90px;
                height: 50px;
        }
.centro {
    /*display: table-cell;*/
    /*vertical-align: middle;*/
    position: absolute;
    top: 60%;
    left: 25%;
    height: 60%;
    width: 80%;
    margin: -15% 0 0 -15% 
}
b{
    color: whitesmoke;
    font-size: 20px;
}
.panel-heading
        {
            border-radius: 10px;
            background-color: rgba(203, 207, 218, 0.6);
            
        }
label{
    
    color: #E7EEEC;
    font-size: 17px;
}
.contorno
        {
            border-radius: 10px;
            border-style: solid;
            border-color:#E7EEEC;
        }
.navbar{
    background-color: #25465F;
        }


    </style>
    
    </head>
    <body class="container">
        <div class="container-fluid">
<div class="row">
            <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header col-xs-2">
      <a class="navbar-brand" href="index"><b style="color:rgb(245,245,245);">Monster INC</b></a>
    </div>
  </div>
</nav>
</div>
            <div class="row">
            <div class="container">
        
        <form action="<?php echo site_url("welcome/registroListo")?>" method="post">
        
            <div class="col-md-6"> 
                <div class="col-md-12">
                    <div class="row contorno">
                    <div class="col-md-12">
                <div class="panel panel-heading">
            <b>Información personal</b>   
            </div>
            <div class="form-group">
                 <label>Nombre</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" placeholder="Nombres" required>
                </div>
            </div>
            <div class="form-group">
            <label>Apellidos</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="form-group">
            <label>Fecha de nacimiento</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
            <label>Dirección</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                <input type="text" class="form-control" placeholder="Dirección">
                </div>
            </div>
            </div>
            </div>
                    
                    <div class="row">&nbsp;</div>
                    
                <div class="row contorno">
                <div class="col-md-12">
                <div class="panel panel-heading">
                <b>Contacto</b>   
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                <label for="email">Telefono</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input class="form-control" placeholder="(449)123-456">
                    </div>
                </div>
                </div>
                </div>
                    </div>  
              
            </div>
            
            
            <div class="col-md-6"> 
                <div class="col-md-12">
                <div class="row contorno">
                    <div class="col-md-12">
                    <div class="panel panel-heading">
                    <b>Información laboral</b>   
                    </div>
                    <div class="form-group">
                    <label>Grado de estudios</label>
                    <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Experiencia</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    </div>
                    </div>
                
                <div class="row">&nbsp;</div>
                    
                <div class="row contorno">
                    <div class="col-md-12">
                    <div class="panel panel-heading">
                    <b>Solicitud de empleo</b>   
                    </div>
                    <div class="form-group">
                    <label>Tipo de empleo</label>
                        <select class="form-control">
                        <option value="0" selected disabled>Seleccione una opción</option>
                        <option value="1">Monstruo 1</option>
                        <option value="2">Monstruo 2</option>
                        <option value="3">Monstruo 3</option>
                        <option value="4">Monstruo 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jornada laboral</label>
                        <div class="radio"><label><input type="radio" name="optradio">Tiempo completo</label></div>
                        <div class="radio"><label><input type="radio" name="optradio">Medio tiempo</label></div>
                        <div class="radio"><label><input type="radio" name="optradio">Menos de 3 días</label></div>
                        <div class="radio"><label><input type="radio" name="optradio">1 día a la semana</label></div>
                        </div>    
                    </div>
                    </div>
                </div>
            </div>
            
            
        <div class="row">&nbsp;</div>
           
        <div class="row">
        <center>
        <button type="submit" class="btn-default ">Submit</button>
        </center>
        </div>
        
        </form>
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
