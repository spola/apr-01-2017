<!DOCTYPE html>
<html>
<head>
    <title>Registro nuevo</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        .centrado {
            top: 20%;
            left: 30%;
            margin: 10% auto;
        }    
        body {
            background-image: url(https://lumiere-a.akamaihd.net/v1/images/image_45070505.jpeg);
            background-size: cover;
        }    
        .trasnparente {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 5;
        }
    </style>
</head>
<body>
    <form action="<?php echo site_url("Welcome/otroRegistro")?>" method="post">
        <div class="row centrado">
            <div class="col-xs-6 col-xs-offset-3 trasnparente">
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Monsters%2C_Inc._logo.svg/2000px-Monsters%2C_Inc._logo.svg.png" class="foto" width="250" alt="250">
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-1">
                        <label>Nombre Completo</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Area</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Pasatiempos</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>¿Mounstro?</label>
                        <br>            
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Correo electronico</label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <label>Contraseña</label>
                        <label>Repetir contraseña</label>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" name="nombre" placeholder="Nombre Completo">
                        <div class="row">
                            &nbsp;
                        </div>
                        <select name="area">
                                <option value="Asustador" >Asustador</option>
                                <option value="Papeleo" >Papeleo</option>
                                <option value="Puertero" >Puertero</option>
                                <option value="Visitante" >Visitante</option>
                        </select>
                        <div class="row">
                            &nbsp;
                        </div>
                        <textarea class="form-control" rows="2" cols="15" name="pasatiempos"></textarea>
                        <div class="row">
                            &nbsp;
                        </div>
                         <label> 
                    <input type="radio" name="monstruo" value="Si"> Si </label>
                        <label>
                    <input type="radio" name="monstruo" value="No"> No </label>
                        <div class="row">
                            &nbsp;
                        </div>
                        <input type="email" placeholder="mounstro.1234@minc.com" name="correo">
                        <div class="row">
                            &nbsp;
                        </div>
                        <input type="password" placeholder="Password" name="pass1">
                        <input type="password" placeholder="Repeat password" name="pass2">
                    </div>
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
                    <div class="col-xs-1 col-xs-offset-4">
                        <input type="submit" class="btn btn-primary" value="Registrarse" name="registro">
                    </div>
                </div>

                <div class="row">
                    &nbsp;
                </div>
            </div>
  </div>
    </form>
</body>
</html>
