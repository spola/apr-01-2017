 <!DOCTYPE html>
<html>
    <head>
        <style>
        </style>
        <title>Comparador</title>
        <body>
            <?php $a = $_GET["palabra1"]?>
            <?php $b = $_GET["palabra2"]?>
            <?php
            if(trim($a === "") || trim($b === ""))
            {
                $res = "";
            }
            else
            {
                if(trim($a === $b))
                {
                    $res = "ok";
                }
                else
                {
                    $res = "no ok";
                }
            }
            ?>
            <fieldset>
                <table>
                    <legend>Comparar</legend>
                    <form action = comparador.php method = GET>
                        <tr>
                            <td><input type = "text" name = "palabra1"></td>
                            <td><input type = "submit" name = "comparar"></td>
                        </tr>
                        <tr>
                            <td><input type = "text" name = "palabra2"></td>
                            <td><label>Resultado: </label><input type = "text" name = "resultado" value = "<?php echo $res ?>"></td>
                        </tr>
                    </form>
                  </table>
            </fieldset>  
        </body>
    </head>
</html>