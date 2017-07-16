<html>

<head>
    <title>Monstruos registrados</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
        #imgfondo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1
        }

    </style>
</head>

<body>
    <img src="https://s-media-cache-ak0.pinimg.com/originals/3a/9c/63/3a9c63f63784ff719a484cf45d3a029b.jpg" id="imgfondo" />
    <?php include "php/navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Monstruos registrados</h2>
                <form role="form" name="login" action="php/login.php" method="post">
                     <div class="form-group">
                        <?php 
                        $conexion= @mysql_connect("localhost","root",""); 
                        mysql_select_db("monsterinc",$conexion); 
                        ?>
                        <?php 
                        ////Obteniendo registros de la base de datos a traves de una consulta SQL 
                        $consulta="SELECT * FROM user"; 
                        $resultado=mysql_query($consulta,$conexion); 
                        while($rows=mysql_fetch_array($resultado)){ 
                            echo "<b>Apodo monstruo: </b>".$rows[1]."<br>"; 
                            echo "<b>Nombre monstruo: </b>".$rows[2]."<br>"; 
                            echo "<b>Email: </b>".$rows[3]."<br>";
                            echo "<b>Fecha registro: </b>".$rows[5]."<br>";
                            echo "<br>";
                        } 
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
