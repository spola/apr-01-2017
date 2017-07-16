<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        
	    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url("estilo/css/login.css")?>">

    </head>
    <body class="container">
        <div class="row centro">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="row login">
                    <div class="col-xs-6">
                        <h1>Bienvenido a </h1>
                        <h1>Monster Inc.</h1>
                    </div>
                    <div class="col-xs-6">
                        <form class="form-horizontal" action="<?php echo site_url("welcome/ingresar");?>" method="post">
                            <div class="form-group">
                                <label for="emailId" class="col-xs-12">Email: </label>
                                <div class="col-xs-12">
                                    <input type="email" class="form-control" id="emailId" name="email" placeholder="Ingrese su email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passwordId" class="col-xs-12">Password: </label>
                                <div class="col-xs-12">
                                    <input type="password" class="form-control" id="passwordId" name="password" placeholder="Ingrese su contraseña, entre 6 y 12 caracteres">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" name="recuerdame">Recuerdame
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <input type="submit" class="btn btn-info" value="Ingresar">
                                <input type="reset" class="btn btn-danger" value="Limpiar">
                            </div>
                        </form>   
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