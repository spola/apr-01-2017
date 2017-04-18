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
    $resultados[] = recuperar($alumno, "hola", "hola", "ok", "tmp");
    $resultados[] = recuperar($alumno, "h o l a", "hola", "ok", "tmp");
    $resultados[] = recuperar($alumno, "hola", "h o l a", "ok", "tmp");
    $resultados[] = recuperar($alumno, "chao", "c h a o", "No ok", "tmp");
    $resultados[] = recuperar($alumno, "c h a o", "chao", "No ok", "tmp");
    
    return $resultados;
}

function chequearCorrectitud($resultados) {

    foreach($resultados as $resultado) {
        if($resultado != "Aprobado") {
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
    </body>
</html>