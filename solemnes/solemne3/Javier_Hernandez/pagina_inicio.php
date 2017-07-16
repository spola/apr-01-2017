<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='login.html'>Login</a>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='login.html'>Necesita Hacer Login</a>";
exit;
}

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "apr";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$lista = "select nombre,apellido,id,fecha_nac,email from persona";
$resLista = $conexion->query($lista);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">    
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    </style>
    </head>        
        <body class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    </button>
                    <a class="navbar-brand" href="#">Inicio</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="Pagina_ingresar.php">Nuevo ingreso</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class=""><a href="pagina_modificar.php">Modificar</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form action= "logout.php">
                            <div> <button type="submit" class="btn btn-link btn-logout">Logout</button></div>
                        </form>
                    </ul>        
                </div>                
            </nav>

            <div>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha nacimiento</th>
                        <th>email</th>
                    </tr>
                <?php
                while($listaPersona = $resLista->fetch_array(MYSQLI_BOTH))
                {
                    echo'<tr>
                         <td>'.$listaPersona['id'].'</td>
                         <td>'.$listaPersona['nombre'].'</td>
                         <td>'.$listaPersona['apellido'].'</td>
                         <td>'.$listaPersona['fecha_nac'].'</td>
                         <td>'.$listaPersona['email'].'</td>
                         </tr>';
                }
                ?>
                </table>
            
                
            </div>
        </body>
