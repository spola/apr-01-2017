<?php
function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return join('',array_reverse($ar[0]));
}

$origen = $_POST['origen'];
$destino = $_POST['destino'];

$destino = utf8_strrev($origen);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Un Título</title>
    <style>
        input[type=text] {
            width: 450px;
            margin-bottom: 15px;
            height: 40px;
            font-size: 30px;
            color: black;
            border: 2px solid black;
        }

        input[type=submit] {
            background-color: lightcoral;
            color: white;
            height: 40px;
            vertical-align: top;
            border-radius: 10px;
            font-size: 20px;
        }

    </style>
</head>

<body>
    <form method="post" action="reverso.php">
        <fieldset>
            <legend>Reversamos las palabras</legend>
            <input type="text" name="origen" value="<?php echo $origen?>" />
            <input type="submit" value="Invertir" />
            <br/>
            <input type="text" name="destino" value="<?php echo $destino?>" />
        </fieldset>
    </form>
</body>

</html>
