<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
    <html>

    <head>
        <title>MonsterInc.</title>
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
                    <h2>Bienvenido</h2>

                </div>
            </div>
        </div>
    </body>

    </html>
