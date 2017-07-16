<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/formulario.css')?>" />
    <title>Registro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron recuadro">
                <h1>Registro</h1><br>
                <h4>Muchas gracias por preferirnos y sea usted bienvenido a Monsters, Inc. Le pedimos de favor llenar todos los campos que se presentan a continuación</h4>
            </div>
        </div>
    </div>
    <form data-toggle="validator" method="post" action="<?php echo site_url("welcome/registrar")?>">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 informacion">
                        <span class="glyphicon glyphicon-user"></span>
                        <span class="titulos">Información Personal</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 informacion">
                        <span class="glyphicon glyphicon-envelope"></span>
                        <span class="titulos">Contacto</span>
                    </div>
                </div>
            </div>
            <div class="row voffset4">
                <div class="col-md-6">
                    <div class="col-md-12 borde">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Ejemplo: Pedro" required>
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input name="apellidos" type="text" class="form-control" placeholder="Ejemplo: Sánchez Torres" required>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input name="direccion" type="text" class="form-control" placeholder="Calle, Número" required>
                        </div>
                        <div class="form-group">
                            <label>Sexo</label>
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="Masculino" required>
                                        Masculino
                                      </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="Femenino" required>
                                        Femenino
                                      </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fecha de nacimiento</label><br>
                            <input name="FDN" type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>País</label><br>
                            <select name="Nacionalidad" class="form-control" required size="5">
                                <option>México</option>
                                <option>USA</option>
                                <option>Chile</option>
                                <option>Francia</option>
                                <option>Italia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input name="ZIP" type="number" class="form-control" required placeholder="26066">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12 borde">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input name="tel" type="tel" class="form-control" placeholder="+52 1 XXXXXX" required>
                        </div>
                        <div class="form-group">
                            <label>Celular</label>
                            <input name="Cel" type="tel" class="form-control" placeholder="+52 1 XXXXXX" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row voffset4">
                <div class="col-md-12 informacion">
                    <span class="titulos">Otro tipo de información</span>
                </div>
            </div>
            <div class="row voffset4">
                <div class="col-md-12 borde">
                    <div class="form-group">
                        <label>Puesto</label>
                        <textarea name="puesto" class="form-control" required placeholder="Describa el puesto que ocupa y lo que realiza"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Comentarios</label>
                        <textarea name="extras" class="form-control" placeholder="Comentarios extra que desee agregar (opcional)"></textarea>
                    </div>
                </div>
            </div>
            <div class="row voffset4">
                <div class="checkbox">
                    <label><input type="checkbox" required> Aceptar término y condiciones</label><br>
                    <input type="submit" class="btn">
                </div>
            </div>
        </div>
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
