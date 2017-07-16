<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil del Monstruo</title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/assets/css/EstilosVistaMike.css" media="screen and (color)" rel="stylesheet">

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
        
        #fotoMike {
            width: 240px;
            height: 180px;
            position: absolute;
            top: 25%;
            left: 23%;
        }
        
        h4 {
            position: absolute;
            top: 55%;
            left: 28%;
        }
        
        #ceo {
            position: absolute;
            top: 60%;
            left: 27%;
            font-size: 13px;
        }

    </style>
</head>

<body>
    <div id="container">
        <div class="row header">
            <span class="glyphicon glyphicon-tags" id="datos"></span>&nbsp;
            <span id="header-nombre"><b>Datos Monstruosos</b></span>
        </div>
        <div id="datosPersonales">
            <div id="headerDatos">
                <span id="verde"><b>DATOS PERSONALES</b></span>
            </div>
            <div id="contenedorDatos">
                <p><b>Nombre:</b>
                    <?php echo $nombre?>
                </p>
                <p><b>Apellidos:</b>
                    <?php echo $apellidos ?>
                </p>
                <p><b>País:</b>
                    <?php echo $pais ?>
                </p>
                <p><b>Sexo: </b>
                    <?php echo $sexo ?>
                </p>
                <p><b>Fecha de nacimiento:</b>
                    <?php echo $fechaNac ?>
                </p>
                <p><b>Email:</b>
                    <?php echo $email ?>
                </p>

            </div>
        </div>

        <div id="foto">
            <img src="/assets/img/mike.png" alt="" id="fotoMike">
            <h4><b><?php echo $nombre, " ", $apellidos ?></b></h4>
            <span id="ceo"><i>Ayudante en Monsters Inc.</i></span>
        </div>

        <div id="habilidades" data-toggle="popover" data-placement="right" data-trigger='hover' title="Habilidades" data-content="Estas son las habilidades con las que cuenta el monstruo!">
            <img src="/assets/img/progressCircles.png" alt="" id="progress"><br>
            <span id="maldad"><b>Maldad</b></span>
            <span id="asustador"><b>Carisma</b></span>
            <span id="amistoso"><b>Energía</b></span>
        </div>
    </div>


    <!---------------------------------Comienzan los scripts---------------------------------------------------------->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">


    </script>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })

    </script>

</body>

</html>
