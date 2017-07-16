<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" />
    -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        body {
    background-image: url(http://localhost:8585/CodeIgniter-3.1.4/MI-perfil2.jpg);
    background-size:cover;
    background-attachment: fixed;
}
a[type="submit"] 
        {
                font-size: 19px;
                border-radius: 10px;
                font-family: sans-serif;
                width: 80px;
                height: 40px;     
                margin:0 auto;
                display:block;
        }
.centro {
    display: table-cell;
    vertical-align: middle;
}
b{
    color: whitesmoke;
    font-size: 20px;
}
.panel-default
        {
            border-radius: 10px;
            background-color: rgba(129, 135, 159, 0.5);/*(129, 135, 159, 0.5);/*(15,28,80,0.4);/*(203, 207, 218, 0.6);*/
            
        }
label{
    
   color: #E7EEEC;
    /*color: gainsboro;
    text-shadow: grey 0.3em 0.3em 0.3em;*/
    font-size: 18px;
}
h3{color: white;}
.contorno
        {
            border-radius: 10px;
            border-style: solid;
            border-color:#E7EEEC;
            /*background-color: rgba(230, 233, 240, 0.15);/*(221, 228, 229, 0.8);*/
            /*color: #E5EBE7;/*#E1E5E2;/*#A8B3C9;*/
        }
.navbar{
    background-color: black;/*#25465F;*/
        }
.circular { width: 300px; 
            height: 300px; 
            border-radius: 150px; 
            background: url(Sulley.jpg);
          }
#borderimg
        {
            border: 8px solid;
            color: rgba(230, 233, 240, 0.8);
            padding: 1px;
        }
img
        {
            vertical-align:middle;
        }


    </style>
    
    </head>
    <body class="container">
        <div class="container-fluid">
<div class="row">
            <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header col-xs-10">
        <!--href="recepcion.html-->
      <a class="navbar-brand" href="<?php echo site_url("Welcome/cargaRecepcion") ?>"><b style="color:rgb(245,245,245); font-family: Monster AG; font-size: 20px;">Monster INC</b></a>
    </div>
      <div class="col-xs-2">
        <?php if($_SESSION['invitado']) :?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo site_url("Welcome/index") ?>" style="color:rgb(245,245,245);">
          <!--<a href="login.html" style="color:rgb(245,245,245);">-->
          <span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
          <?php endif ?>
    </div>
  </div>
</nav>
</div>
        
             <div class="container">
        
             <div class="container  bootstrap snippet">
<div class="row ng-scope">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <div class="pv-lg"><img class="img-circle"  src="http://localhost:8585/CodeIgniter-3.1.4/Sulley.jpg" alt="Cinque Terre" width="240" height="236" id="borderimg"></div>
                <h3 class="m0 text-bold"><?php echo $Nombre ?><?php echo " $Apellidos" ?></h3>
                <!-- <div class="mv-lg">
                    <p>Información de perfil</p>
                </div> -->
            </div>
        </div>
        
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center"><h3>Información de perfil</h3></div>
                <div class="row pv-lg">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form class="form-horizontal ng-pristine ng-valid" action="<?php echo site_url("Welcome/edicionPerfil")?>/?id=<?php echo $monstruo_ID ?>" method="post">  
                            
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Nombre</label>
                                <div class="col-sm-10">
                                     <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" id="inputContact1" type="text" placeholder="" value="<?php echo $Nombre ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1">Apellidos</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input class="form-control" id="inputContact1" type="text" placeholder="" value="<?php echo $Apellidos ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label" for="inputContact1">Nacimiento</label>
                            <div class="col-sm-9">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input type="date" name="nacimiento" id="nacimiento" class="form-control" value="<?php echo $Nacimiento ?>" readonly>
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputContact1">Empleo</label>
                            <div class="col-sm-10">
                            <select class="form-control" name="empleo" id="opciones" data-toggle="tooltip" data-placement="right" readonly>
                            <option value="0" selected disabled>Seleccione una opción</option>
                            <option value="Asustador" <?php if($Empleo == "Asustador"){echo 'selected';} ?>>Asustador</option>
                            <option value="Asistente asustador" <?php if($Empleo == "Asistente asustador"){echo 'selected';} ?>>Asistente asustador</option>
                            <option value="Mensajero" <?php if($Empleo == "Mensajero"){echo 'selected';} ?>>Mensajero</option>
                            <option value="Directivo" <?php if($Empleo == "Directivo"){echo 'selected';} ?>>Directivo</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label" for="inputContact1">Sexo</label>
                            <div class="col-sm-10">
                            <div class="radio"><label><input type="radio" name="sexo" value="Masculino" <?php if($Sexo == "Masculino"){echo 'checked';}?>>Masculino</label></div>
                            <div class="radio"><label><input type="radio" name="sexo" value="Femenino" <?php if($Sexo == "Femenino"){echo 'checked';}?>>Femenino</label></div>
                            </div>
                            </div> 
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input class="form-control" id="inputContact2" type="email" value="<?php echo $Email ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact3">Phone</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact3" type="text" value="(123) 465 789">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact4">Mobile</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputContact4" type="text" value="(12) 123 987 465">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact6">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputContact6" row="4">Some nice Street, 1234</textarea>
                                </div>
                            </div>-->
                            
                 
                <div class="text-center">
                    <?php if($_SESSION['invitado']) :?>
                    <a class="btn btn-default" type="submit" href="<?php echo site_url("Welcome/edicionPerfil")?>/?id=<?php echo $monstruo_ID ?>">Editar</a>
                    <!--href="InfoPerfilEdicion.html"-->
                    <?php endif ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
            </div>
             </div>
            
     
        
        
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
              //$('#nacimiento').val('2003-10-22'); 
        </script>
        
    </body>

</html>
