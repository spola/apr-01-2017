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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" /> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        body {
    background-image: url(http://localhost:8585/CodeIgniter-3.1.4/fondoRegistro2.png);
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
                margin:0 auto;
                display:block;
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
            background-color: rgba(15,28,80,0.5);/*(203, 207, 218, 0.6);*/
            
        }
label{
    
   /* color: #E7EEEC;*/
    color: whitesmoke;
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
            
            <div class="row centro">
            <div class="container centro">
        
        <form name="formulario" action="<?php echo site_url("Welcome/registroListo")?>" method="post" onsubmit="return validación()" id="registroForm">
        
            <div class="col-md-6 col-md-offset-3"> 
                <div class="col-md-12">
                    <div class="row contorno">
                    <div class="col-md-12">
                <div class="panel panel-heading">
            <b>Perfil de usuario</b>   
            </div>
            <div class="form-group" id="nombre-form">
                 <label>Nombre</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" placeholder="Nombres" id="nombre" name="nombre" data-toggle="tooltip" data-placement="right" title="Aquí va tu nombre" required> 
                
                </div>
            </div>
            <div class="form-group">
            <label>Apellidos</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" placeholder="Apellidos" data-toggle="tooltip" data-placement="right" title="Aquí van tus apellidos"  required>
                </div>
            </div>
            <div class="form-group">
            <label>Fecha de nacimiento</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type="date" class="form-control" data-toggle="tooltip" data-placement="right" title="¡Anda que no eres tan viejo!" required>
                </div>
            </div>
            <div class="form-group">
                    <label>Tipo de monstruo</label>
                        <select class="form-control" id="opciones" data-toggle="tooltip" data-placement="right" >
                        <option value="0" selected disabled>Seleccione una opción</option>
                        <option value="1">Monstruo 1</option>
                        <option value="2">Monstruo 2</option>
                        <option value="3">Monstruo 3</option>
                        <option value="4">Monstruo 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sexo</label>
                        <div class="radio"><label><input type="radio" name="optradio">Masculino</label></div>
                        <div class="radio"><label><input type="radio" name="optradio">Femenino</label></div>
                        </div> 
            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control form-control-success" id="email" placeholder="Email" required>
                    </div>
            </div>
             <div class="form-group">
                <label for="email">Password</label>
            <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                </div>
            <div class="form-group">
                <label for="email">Teléfono</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input class="form-control" type="tel" placeholder="(449)123-456" id="telefono">
                    </div>
                </div>
                </div>
            </div>
                    <div class="row">&nbsp;</div>
                    </div>  
            </div>
            
            <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <div id="messages"></div>
        </div>
    </div>
            
        <div class="row">&nbsp;</div>
           
        <div class="row">
       
        <button type="submit" class="btn-default ">Submit</button>
       
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
        
        <script type="text/javascript">
                function validación() {
                    /*$('[data-toggle="tooltip"]').tooltip();*/
                    
                     var valor = document.getElementById("nombre").value;
                    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
                   
                    alert("¡Ops! Parece que hay datos incorrectos");
                        
               /* });*/
                    /*$('#nombre').popover({title: "Header", content: "Blabla"});
                    $('#nombre input').hover({
                        $(this).popover('show')
                    });*/
                         
                        return false;
                    }
                    indice = document.getElementById("opciones").selectedIndex;
                    if( indice == null || indice == 0 ) {
                     alert("¡Ops! Parece que no has indicado que monstruo eres");
                    return false;
                    }
                    
                    opciones = document.getElementsByName("optradio");
                    var seleccionado = false;
                    for(var i=0; i<opciones.length; i++) {    
                    if(opciones[i].checked) {
                    seleccionado = true;
                    break;
                    }
                    }
                    if(!seleccionado) {
                    alert("¡Ops! Parece que no has seleccionado tu sexo");
                    return false;
                    }
                    
                    /*valor = document.getElementById("email").value;
                    if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
                    alert("!Ooh¡ Creo que has olvidado tu dirección de email");
                    return false;
                    }*/
                    
                    var pass = document.getElementById("password").value;
                    if( pass == null || pass.length == 0 || /^\s+$/.test(pass) ) {
                    alert("¡No olvides poner tu contraseña!");
                    return false;
                    }
                    
                    telfono = document.getElementById("telefono").value;
                    if( !(/^\+\d{2,3}\s\d{9}$/.test(telfono)) ) {
                    alert("¡Lo olvide! Debes escribir tu tel con Prefijo internacional (+ seguido de 2 o 3 cifras), espacio en blanco y 9 cifras consecutivas");
                    return false;
                    }
                    }
        </script>
        
    </body>

</html>
