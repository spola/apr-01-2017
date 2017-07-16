<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>Tabla de Registros</title>
    <style>
        body {
            background-image: url(https://v.cdn.vine.co/r/avatars/81AC66D88F1317713224002887680_5864135e761.7.0.jpg?versionId=I3T45EQtHIfAw.IAfxdkn6InbBXrvBob);
        }    
        .centrado {
            top: 20%;
            left: 40%;
            margin: 10% auto;
        }   
        .foto {
            font-size: 25;
        } 
        .tabla {
            background-color: rgba(255, 255, 255, .9);
        } 
        th {
            text-align: center;
            font: oblique bold 110% cursive;
        } 
        td {
            text-align: center;
            line-height: 30;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="col-xs-3 col-xs-offset-1">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Monsters%2C_Inc._logo.svg/2000px-Monsters%2C_Inc._logo.svg.png" class="img-responsive" alt="Responsive image">
        </div>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"> Registro de monstruos </a>
            </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav  navbar-left">
                            <li><a href="registrarse">Registrarse</a></li>
                            <li class="dropdown">
                            </li>
                             <li><a href="loginAgain">Logout</a></li>
                            <li class="dropdown">
                        </ul>
                    </div>
        </div>
    </nav>
    <div class="row centrado">
        <div class="col-xs-8 col-xs-offset-2 tabla">
            <table class="table table-responsive">
                <tr>
                    <th>Nombre</th>
                    <th>Area de trabajo</th>
                    <th>Pasatiempos</th>
                    <th>Fotografia</th>
                </tr>
                <tr>
                    <td>James P. "Sulley" Sullivan</td>
                    <td>Asustador </td>
                    <td>Comer, Leer historietas, Hacer pesas</td>
                    <td> <img src="http://vignette1.wikia.nocookie.net/disney/images/f/ff/James-p-sulley-sullivan.png/revision/latest?cb=20131027234614" class="foto" width="50" alt="50"></td>
                </tr>
                <tr>
                    <td>Mike Wazowski</td>
                    <td>Puertero </td>
                    <td>Contar chistes, jugar videojuegos, salir de paseo</td>
                    <td> <img src="https://vignette3.wikia.nocookie.net/pixar/images/3/38/Mike1.png/revision/latest?cb=20110515132411" class="foto" width="50" alt="50"></td>
                </tr>
                <tr>
                    <td>Randall Boggs</td>
                    <td>Asustador </td>
                    <td>Ser enojon, Ganarle a Sullivan, Camuflajearse</td>
                    <td> <img src="https://vignette1.wikia.nocookie.net/villains/images/6/6f/Randall.jpg/revision/latest?cb=20130423182504" class="foto" width="50" alt="50"></td>
                </tr>
                <tr>
                    <td>Henry J. Waternoose III</td>
                    <td>El patron</td>
                    <td>Comer en restaurantes caros, Regañar empleados, dormir</td>
                    <td> <img src="https://vignette4.wikia.nocookie.net/pixar/images/5/51/Henry_J._Waternoose_III.jpg/revision/latest/scale-to-width-down/282?cb=20160404022236" class="foto" width="50" alt="50"></td>
                </tr>
                <tr>
                    <td>Roz</td>
                    <td>Papeleo </td>
                    <td>Ver Monstronovelas, Comer helado, Visitar a su familia</td>
                    <td> <img src="https://pbs.twimg.com/profile_images/3202823163/5a3e7925661df108ae3416a9bc940a12_400x400.jpeg" class="foto" width="50" alt="50"></td>
                </tr>
                <tr>
                    <td>George Sanderson</td>
                    <td>Asustador </td>
                    <td>Salir con sus amigos de fiesta, </td>
                    <td> <img src="https://vignette4.wikia.nocookie.net/pixar/images/c/c1/983036-george_sanderson_large.jpg/revision/latest?cb=20101112062918" class="foto" width="50" alt="50"></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
