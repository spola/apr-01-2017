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

    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    
    <style>
        
    </style>
    </head>        
        <body class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    </button>
                    <a class="navbar-brand" href="pagina_inicio.php">Inicio</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Nuevo ingreso</a></li>
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
      <div>
        <h1>Registro</h1>
        <form method="POST" action="ingreso_persona.php" >       
        <table>
            <tr>
                <td>
                    <label for="nombre">Nombre</label>
                </td>
                <td>
                    <label for="nombre"> : </label>
                </td>
                <td>
                    <input id = "nombre" class="form-control" type="text" name="nombre" value="" required/>   
                </td>
            </tr>
            <tr>
                <td>
                    <label for="apellido">Apellido</label>
                </td>
                <td>
                    <label for="apellido"> : </label>
                </td>
                <td>
                    <input id = "apellido" class="form-control" type="text" name="apellido" value="" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fecha">Fecha de nacimiento</label>
                </td>
                <td>
                    <label for="fecha"> : </label>
                </td>
                <td>
                    <input id = "fecha" class="form-control" type="date" name="fecha" value="" required/>   
                </td>
            </tr>
            <tr>
                <td>
                    <label>E-mail</label>
                </td>
                <td>
                    <label> : </label>
                </td>
                <td>                    
                    <input id= "email" class="form-control" type="email" name="email" required>          
                </td>
            </tr>
            <tr>
                <td>
                    <input id="aceptar" class="btn btn-default" type="submit"  value="Aceptar" name="Aceptar"/>
                </td>
                <td>
                </td>
                <td>
                    <input type="reset" class="btn btn-default" value="Restablecer">
                </td>
            </tr>
      </table> 
      </form>
      </div>

    </div>            
    </body>
        

</html>
