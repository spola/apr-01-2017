<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/EstilosFormulario.css">

    <style>
        @media (max-width: 1600px) {
            .col-xs-1 {
                height: 80px;
            }
        }
        
        @media (max-width: 1400px) {
            .col-xs-1 {
                height: 80px;
            }
        }
        
        @media (max-width: 1200px) {
            .col-xs-1 {
                height: 60px;
            }
        }

    </style>
</head>

<body>
    <div class="col-xs-5 col-xs-offset-5">
        <div class="container">
            <div class="col-xs-2">
                <div class="logo">
                </div>
            </div>
            <fieldset>
                <legend>REGISTRO</legend>
                <div class="row datos">
                    <form action="<?php echo site_url("welcome/actualizarDatosBD")?>/?id=<?php echo $ID ?>" method="post">
                        <label>Nombre:*</label>
                        <input type="text" id="nombre" value="<?php echo $nombre ?>" name="nombre" placeholder="Nombre" required>
                        <label>Apellidos:* </label>
                        <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos ?>" placeholder="Apellidos" required>

                        <label>País:* </label>
                        <select id="pais" name="pais" required>
                            <option value="seleccione">Seleccione</option>
                            <option value="Mexico" <?php if($pais == "Mexico"){echo 'selected';} ?>>México</option>
                            <option value="Canada" <?php if($pais == "Canada"){echo 'selected';} ?>>Canadá</option>
                            <option value="Usa" <?php if($pais == "Usa"){echo 'selected';} ?>>USA</option>
                            <option value="Chile" <?php if($pais == "Chile"){echo 'selected';} ?>>Chile</option>
                            <option value="Argentina" <?php if($pais == "Argentina"){echo 'selected';} ?>>Argentina</option>
                            <option value="Alemania" <?php if($pais == "Alemania"){echo 'selected';} ?>>Alemania</option>
                            <option value="España" <?php if($pais == "España"){echo 'selected';} ?>>España</option></select>

                        <label>Sexo:</label>
                        <label for="hombre">Hombre: </label>
                        <input type="radio" name="sexo" id="hombre" value="Hombre" <?php if($sexo == "Hombre"){echo 'checked';}?>>
                        <label for="mujer">Mujer: </label>
                        <input type="radio" name="sexo" id="mujer" value="Mujer" <?php if($sexo == "Mujer"){echo 'checked';}?>>

                        <div class="row fecha">
                            <label>Fecha de Nacimiento:</label>
                            <input type="date" id="fecha" name="fechaNac" value="<?php echo $fechaNac ?>"><br>
                        </div>

                        <label>Email:* </label>
                        <input type="text" id="email" name="email" placeholder="ejemplo@correo.com" value="<?php echo $email ?>" required>

                        <label>Teléfono: </label>
                        <input type="text" id="telefono" name="tel" placeholder="+52-1-XXX-XXX-XX-XX" value="<?php echo $telefono ?>"><br>

                        <label>Dirección: </label>
                        <input type="text" id="dire" name="dire" placeholder="Ejemplo: Edimburgo 9041 Las Condes" required value="<?php echo $direccion ?>"><br>

                        <div class="row acepto">
                            <label for="condiciones">Aceptar Términos & Condiciones*</label>
                            <input type="checkbox" id="condiciones" name="condiciones" required><br><br>
                        </div>

                        <div class="row boton">
                            <div class="col-xs-6 col-xs-offset-2">
                                <input type="submit" value="Enviar" id="boton">
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
</body>
</html>