<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "lector.php";
include "revisor.php";

$alumnos = cargarAlumnos("alumnos");

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Evaluador</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td:nth-child(1) {
                text-transform: capitalize;
                font-weight: bold;
            }
            .flotante {
                float: left;
                width: 260px;
                height: 120px;
                border-color: darkgreen;
                border-style: outset;
            }
            .flotante div { float:left}
            .flotante div:nth-child(1)  { 
                text-transform: capitalize;
                font-weight: bold;
            }
            ul {
                margin-top: 0px;
            }
        </style>
    </head>
    <body>
    <h1>Super revisón 3000 pro</h1>

<?php foreach($alumnos as $alumno) :?>
    <div class="flotante">
        <div><?php echo str_replace("_", " ", $alumno) ?></div>
        <div>
        <ul>
                <?php $resultados = alumnoCumple($alumno)?>
                <?php foreach($resultados as $res) : ?>
                    <li><?php echo $res ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
<?php endforeach?>

<?php
/*
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($alumnos as $alumno) :?>
            <tr>
                <td><?php echo str_replace("_", " ", $alumno) ?></td>
                <td>
                <ul>
                <?php $resultados = alumnoCumple($alumno)?>
                <?php foreach($resultados as $res) : ?>
                    <li><?php echo $res ?></li>
                <?php endforeach ?>
                </ul>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
*/
    ?>
    </body>

</html>