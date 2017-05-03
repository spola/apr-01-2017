<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $ase = str_replace(' ', '', $a);
    $bse = str_replace(' ', '', $b);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comparador de palabras</title>
        <style>
            input[type = "submit"]{
                background-color: lightcoral;
                color: white;
                font-size: 10px;
                font-family: sans-serif;
                width: 65px;
                height: 40px;
                border-radius: 10px;
            }
            
            input[type = "text"]{
                color: black;
                font-size: 20px;
                font-family: cursive;
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
                <input type = "text" name = "a" value = "<?php echo $a; ?>">  
                <input type = "submit" value = "Comparar"><br><br>
                <input type = "text" name = "b" value = "<?php echo $b?>"><br>
                <span id = "res"><?php
                    if(strcasecmp($ase,$bse) == 0){
                        echo "ok";
                    }
                    else{
                        echo "No ok";
                    }
                    ?></span>
            </fieldset>
        </form>
    </body>
</html>