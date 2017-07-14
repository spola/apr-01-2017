<?php
$a = $_GET['a'];
$b = $_GET['b'];

$cadena1 = str_replace(' ', '', $a);
$cadena2 = str_replace(' ', '', $b);
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comparador de Palabras</title>
        <style>
            input[type = "submit"]{
                background-color: mediumvioletred;
                color: white;
                font-size: 10px;
                font-family: sans-serif;
                width: 65px;
                height: 40px;
                border-radius: 10px;
            }
            
            input[type = "text"]{
                color: black;
                font-size: 25px;
                font-family: sans-serif;
                border: 4px groove;
                width: 350px;
                height: 25px;
            }
        </style>
    </head>
    <body>
        <form action = "comparador.php">
            <fieldset>
                <legend><b>Comparador de palabras</b></legend>
                <input type = "text" name = "a" value = "<?php echo $a; ?>"><br>
                <input type = "text" name = "b" value = "<?php echo $b; ?>"><br>
                <input type = "submit" value = "Comparar"><br><br>
            </fieldset>
        </form>
    </body>
</html>