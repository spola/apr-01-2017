<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ingreso de Mostruos</title>

    <!-- Bootstrap -->
    <!---<link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  
      <style>
          .container{
              background-color:beige
          }
      </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
         <ul class="breadcrumb">
             <li><a class="navbar-brand" href="#"><img src="img/logo.jpg" width="80px"></a></li>
             <li><a href="PaginaUno.html">Mostruos Existentes</a></li>
             <li><a href="PaginaTres.html">Mostruos Nuevos</a></li>
             <li><a href="Login.html">Logout</a></li>
        </ul> 
        
        
        
            
    <body class="container">
        <div class="row centro">
            <div class="col-xs-30 col-xs-offset">
                <div class="row ingreso">
                    <div class="col-xs-30">
            <h2>Formulario De Ingreso de Mostruos</h2>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Segundo Nombre</th>
                        <th class="text-center">Apellido</th>
                        <th class="text-center">Segundo Apellido</th>
                        <th class="text-center">Sexo</th>
                        <th class="text-center">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="text-center"><input type="text" class = "form-control" name = "PrimerNombre" required="required"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "SegundoNombre"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "PrimerApellido" required="required"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "SegundoApellido"></td>
                        <td class="text-center"><select class="form-control" name="sexo">
                            <option value="select">---</option>
                            <option value="otros">Otros</option>
                            <option value="masculino">H</option>
                            <option value="femenino">M</option>
                            </select>
                        </td>
                        <td class="text-center"><input id="email" type="text" class="form-control" name="email"></td>
                        <td class="text-center"><button type="submit" class="btn btn-default">Guardar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="text-center"><input type="text" class = "form-control" name = "PrimerNombre" required="required"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "SegundoNombre"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "PrimerApellido" required="required"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "SegundoApellido"></td>
                        <td class="text-center"><select class="form-control" name="sexo">
                            <option value="select">---</option>
                            <option value="otros">Otros</option>
                            <option value="masculino">H</option>
                            <option value="femenino">M</option>
                            </select>
                        </td>
                        <td class="text-center"><input id="email" type="text" class="form-control" name="email"></td>
                        <td class="text-center"><button type="submit" class="btn btn-default">Guardar</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="text-center"><input type="text" class = "form-control" name = "PrimerNombre" required="required"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "SegundoNombre"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "PrimerApellido" required="required"></td>
                        <td class="text-center"><input type="text" class = "form-control" name = "SegundoApellido"></td>
                        <td class="text-center" ><select class="form-control" name="sexo">
                            <option value="select">---</option>
                            <option value="otros">Otros</option>
                            <option value="masculino">H</option>
                            <option value="femenino">M</option>
                            </select>
                        </td>
                        <td class="text-center"><input id="email" type="text" class="form-control" name="email"></td>
                        <td class="text-center"><button type="submit" class="btn btn-default">Guardar</button></td>
                    </tr>
                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!--<script src="js/bootstrap.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>