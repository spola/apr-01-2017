<!DOCTYPE HTML>
  <html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Monster Inc.</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/recepcionRegistro.css')?>"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
<body>
  <div class="container-fluid">
   <body class="container">
    <div class="row">
       <div class="col-md-6">
        <h2>Bienvenidos a Monster Inc.</h2>
         <pre>Monster inc. tiene como vision ser la organización 
         líder, diseñando y aplicando las mejores Tecnologias En 
         Nuestros Enlatados, en las áreas de Enegergizantes,
         manteniendo un alto nivel de permanencia, para ser
         identificados como símbolo de excelencia.</pre>
        </div>
        <br>
        <br>
        <div class="col-md-6">
            <h4>Lista de usuarios registrados.</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Habilitado</th>
                    </tr>
                </thead>
            <?php foreach($usuarios as $usuario):?>
                    <tr>
                        <td><?php echo $usuario->id?></td>
                        <td><?php echo $usuario->nombre?></td>
                        <td><?php echo $usuario->apellido?></td>
                        <td><?php echo $usuario->usuario?></td>
                        <td><?php echo $usuario->habilitado?></td>
                    </tr>
            <?php endforeach?>
            </table>
        </div>
        <div class="imagen"></div>
    </div>
           
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>