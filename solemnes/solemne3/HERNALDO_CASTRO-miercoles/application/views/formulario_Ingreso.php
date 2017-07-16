<!DOCTYPE html>
<html>
    <head>        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <link rel="stylesheet" href="estilos2.css">

        <script src="bootstrap-3.3.7-dist/css/bootstrap.min.css"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        
    </head>
    
    <body >
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action ="Resultado_Ingresado.html" class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Formulario de Ingreso Monster</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="fname" name="name" type="text" placeholder="Nombre Monster" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="lname" name="name" type="text" placeholder="Edad" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="email" name="email" type="email" placeholder="Email Monster" class="form-control" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-6">
                                <input id="phone" name="phone" type="text" placeholder="Fono o Whatsapp Monster" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" name="message" placeholder="Descripcion del Monster" rows="7" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                        <div class="col-md-6">
                            <input type="file" class="btn btn-primary btn-lg">    
                            </div>                            
                        </div>
                      
                        <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>    
                             <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-lg" > Enviar</button>    
                            </div>
                        </div>
                        <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>    
                            <div class="col-md-4">
                            <input type="checkbox">Monstruo Bueno   
        					<input type="checkbox">Monstruo Malo   
                            </div>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>    
                            <div class="col-md-4">
                            <input type="radio">Macho
        					<input type="radio">Hembra  
                            </div>
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>    
                            <div class="col-md-4">
                             <select>
        					<option value="asustar">Asustar</option>
        					<option value="jugar">Jugar</option>
        					</select>  
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
    
       
    <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

</html>