<?php
// $_POST Arreglo asociativo donde están los parámetros enviados a nuestra página por este medio
$a = $_GET['a'];
$b = $_GET['b'];
$sa= str_replace((' '),'',$a);
$sb= str_replace((' '),'',$b);
if (strcmp($sa, $sb) == 0) {
    $res = "ok";
}
else{
    $res = "No ok";
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Comparador</title>
    <style>
        input[type=text] {
            width: 450px;
            margin-bottom: 15px;
            height: 40px;
            font-size: 30px;
            color: black;
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
    <form method="get" action="comparar.php">
        <fieldset>
            <legend>Comparador de  palabras</legend>
            <input type="text" name="a" value="<?php echo $a?>" />
            <input type="submit" value="Comparar" />
            <br/>
            <input type="text" name="b" value="<?php echo $b?>" />
            <br/>
            <span id="res"><?php echo $res?></span>
        </fieldset>
    </form>
</body>
</html>