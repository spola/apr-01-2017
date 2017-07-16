<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="/CodeIgniter-3.1.5/assest/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/CodeIgniter-3.1.5/assest/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">    
        <link rel="stylesheet" href="/CodeIgniter-3.1.5/assest/EstiloMenu.css">
        <title>Monsters inc</title>
    </head>
    <body>
        <ol class="breadcrumb">
            <li><a href="MenuLogeado.php">Inicio</a></li>
            <li><a href="Registros.php">Regitros</a></li>
            <li class="navbar-right"><a href="MenuSolemne.php">Cerrar sesión</a></li>
        </ol>
        <h1 align="center">Bienvenido a registros.</h1>
        <p align="center">Complete los siguientes campos:</p>
        <div class="RegistroCuenta">
				<form>
                    <div>
                        
                        <input type="text" name="nombre" placeholder="Nombre completo" required>
                    </div>
                    <div>
                        
                        <input type="text" name="apellido" placeholder="Nacionalidad" required>
                    </div>
                    <div>
                        <input type="text" name="FechaNac" placeholder="Fecha de nacimiento   (DD / MM / AA)" required>
                    </div>
                    <div>
                        
                        <input type="text" name="Ciudad" placeholder="Ciudad" required>
                    </div>
                    <div>
                         <input type="text" name="Cargo" placeholder="Cargo (Asustador, Ayudante, Otro)" required>
                    </div>
                    <div>
                        <input type="submit" name="registrar" class="registrar" value="Registrar" 
                        onclick="Funcion()">
                    </div>
                   <div>
                       <p id="mensaje"></p>
                    </div>
                    <script>
                        function Funcion() { 
                        document.getElementById("mensaje").innerHTML = "Registro realizado correctamente.";
                        }
                    </script>
				</form>	
            
		  </div>
    </body>
</html>