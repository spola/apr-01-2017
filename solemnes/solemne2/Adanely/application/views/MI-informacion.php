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

 button[type="submit"] 
        {
                font-size: 20px;
                border-radius: 10px;
                font-family: sans-serif;
                width: 90px;
                height: 50px;
        }
.centro {
    display: table-cell;
    vertical-align: middle;
    /*position: absolute;
    top: 60%;
    left: 25%;
    height: 60%;
    width: 80%;
    margin: -15% 0 0 -15% */
}
b{
    color: whitesmoke;
    font-size: 20px;
}
.panel-heading
        {
            border-radius: 10px;
            background-color: rgba(148,152,168,0.8);/*(129, 135, 159, 0.5);/*(15,28,80,0.4);/*(203, 207, 218, 0.6);*/
            
        }
label{
    
   /* color: #E7EEEC;*/
    color: gainsboro;
    text-shadow: grey 0.3em 0.3em 0.3em;
    font-size: 20px;
}
        h1{text-shadow: black 0.3em 0.3em 0.3em;}
.contorno
        {
            border-radius: 10px;
            border-style: solid;
            border-color:#E7EEEC;
            background-color: rgba(230, 233, 240, 0.15);/*(221, 228, 229, 0.8);*/
            color: #E5EBE7;/*#E1E5E2;/*#A8B3C9;*/
        }
.navbar{
    background-color: black;/*#25465F;*/
        }
.circular { width: 300px; 
            height: 300px; 
            border-radius: 150px; 
            background: url(http://localhost:8585/CodeIgniter-3.1.4/Sulley.jpg);
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
    <div class="navbar-header col-xs-2">
      <a class="navbar-brand" href="paraiso"><b style="color:rgb(245,245,245); font-family: Monster AG; font-size: 20px;">Monster INC</b></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index" style="color:rgb(245,245,245);"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</div>
        
             <div class="container">
        
            <div class="col-md-4"> 
                <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-12">
                <div class="panel panel-heading">
                    <b>Foto de perfil</b> 
                </div>
                 <div class="row centro">     
                
                    <div class="row centro">
                    <img src="http://localhost:8585/CodeIgniter-3.1.4/Sulley.jpg" class="img-circle" alt="Cinque Terre" width="240" height="236" id="borderimg">
                    </div>
                    <!-- <a href="nuevoRegistro"><b>Editar </b></a> -->
                    <!--<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>-->
               
                 </div>  
                        </div>
                        </div>
                    </div>
                </div>
                 
                 <div class="col-md-8"> 
                <div class="col-md-12">
                    <div class="row contorno">
                    <div class="col-md-12">
                <div class="panel panel-heading">
            <b>Información de perfil</b> 
            </div>
                 <div class="col-md-12">
                 <div class="row">
                     <h1 style="color:rgb(245,245,245); font-family: Monster AG">NOMBRE</h1>
                    <label style="size: 22px;">James P.</label>
                 </div>
                 <div class="row">
                     <h1 style="color:rgb(245,245,245); font-family: Monster AG">APELLIDOS</h1>
                    <label style="size: 22px;">Sullivan</label>
                 </div>
                  <div class="row">
                     <h1 style="color:rgb(245,245,245); font-family: Monster AG">FECHA DE NACIMIENTO</h1>
                    <label style="size: 22px;">02/11/2001</label>
                 </div>
                 <div class="row">
                     <h1 style="color:rgb(245,245,245); font-family: Monster AG">TIPO DE MONSTRUO</h1>
                    <label style="size: 22px;">Monstruo 1</label>
                 </div>
                 <div class="row">
                     <h1 style="color:rgb(245,245,245); font-family: Monster AG">SEXO</h1>
                    <label style="size: 22px;">Masculino</label>
                 </div>
                 <div class="row">
                     <h1 style="color:rgb(245,245,245); font-family: Monster AG">EMAIL</h1>
                    <label style="size: 22px;">Sulley@Monsters.inc</label>
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
               
        </script>
        
    </body>

</html>
