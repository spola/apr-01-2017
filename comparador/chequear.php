<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include("revisor.php");

function GUID()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function ejecutarChequeo($alumno) {
    $resultados = array();
    $resultados[] = array("hola", "hola", "ok");
    $resultados[] = array("h o l a", "hola", "ok");
    $resultados[] = array("hola", "h o l a", "ok");
    $resultados[] = array("chao", "c h a o", "ok");
    $resultados[] = array("c h a o", "chao", "ok");
    $resultados[] = array("c h a o", "hola", "No ok");
    $resultados[] = array("h o l a", "chao", "No ok");
    $resultados[] = array("ñandú", "ñandú", "ok");
    $resultados[] = array("ñ a n     d ú     ", "ñandú", "ok");
    $resultados[] = array("    ñ    a   n  d  ú   ", " ñ   a n d ú    ", "ok");
    $resultados[] = array("nandu", "ñandú", "No ok");

    foreach ($resultados as $key => $value) {
        $resultados[$key][] = recuperar($alumno, $value[0], $value[1], $value[2], "tmp");
    }
    
    return $resultados;
}

function chequearCorrectitud($resultados) {

    foreach($resultados as $resultado) {
        if($resultado[3] != "Aprobado") {
            return false;
        }
    }
    return true;
}

if(isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
    $clase = "";

    $guid = GUID();

    mkdir("tmp/" . $guid);
    file_put_contents("tmp/" . $guid . "/comparador.php", $codigo);

    $resultados = ejecutarChequeo($guid);
    $clase = chequearCorrectitud($resultados) ? "correcto" : "incorrecto";

} else {
    $clase = "";
    $codigo = "";
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Chequear</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            textarea {
                width: 100%;
            }
            .correcto {
                background-color: lightgreen;
            }
            .incorrecto {
                background-color: indianred;
            }
        </style>
    </head>
    <body>
        <h1>Chequeo personal antes de enviar</h1>
        <h2>Comprobación de Html bien formado</h2>
        <p>Recuerde validar su código generado antes de hacer la prueba en el validador siguiente.</p>
        <p>Utilice el validador <a href="https://validator.w3.org/#validate_by_input" target="_blanck">https://validator.w3.org/#validate_by_input</a>.
        Para obtener el código generado una vez que se cargue la página aprete CTRL + U en chrome y utilice ese código html.
        </p>
        <fieldset class="<?php echo $clase?>">
            <legend>Chequeo</legend>
            <form action="chequear.php" method="post">
                <p>Pegue el código del archivo php </php>
                <textarea rows="30" name="codigo"><?php echo $codigo?></textarea>
                <button>Comprobar</button>
            </form>
        </fieldset>
        <?php if(isset($resultados)):?>
        <fieldset>
            <legend>Test ejecutados</legend>
            <table>
                <thead>
                    <tr>
                        <th>Entrada</th>
                        <th>Entrada</th>
                        <th>Esperado</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultados as $resultado):?>
                    <tr>
                        <td><?php echo $resultado[0]?></td>
                        <td><?php echo $resultado[1]?></td>
                        <td><?php echo $resultado[2]?></td>
                        <td><?php echo $resultado[3]?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
        </fieldset>
        <?php endif?>
    </body>
</html>