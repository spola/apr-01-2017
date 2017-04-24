<pre>
<?php

function isOperador($op) {
    return $op == '+' || $op == '-' || $op == '/' || $op == '*';
}

function isNumero($op) {
    return is_numeric($op);
}


$op = $_GET['boton'];
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$operador = $_GET['operador'];


$cajaInferior = $op;



?>
</pre>
<!DOCTYPE html>
<html>
    <head>
        <title>Mi calculadora</title>
        <style>
            /*Comentario*/
            
            .operador {
                background-color: lightgray;
            }
            .igual {
                background-color: gray;
                color: white;
            }
            input[type=submit] {
                width: 30px;
            }
            
        </style>
    </head>
    <body>
        <form method="get" action="calculadora.php">
            <input type="hidden" name="num1" value="<?php echo $numero1?>"/>
            <input type="hidden" name="num2" value="<?php echo $numero2?>"/>
            <input type="hidden" name="operador" value="<?php echo $operador?>"/>
            <table>
                <thead>
                    <tr>
                        <td colspan="4"><input type="text" readonly value="<?php echo $cajaSuperior?>"/></td>
                    </tr>
                    <tr>
                        <td colspan="4"><input type="text" readonly value="<?php echo $cajaInferior?>"/></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="submit" value="7" name="boton"/></td>
                        <td><input type="submit" value="8" name="boton"/></td>
                        <td><input type="submit" value="9" name="boton"/></td>
                        <td><input type="submit" value="+" name="boton" class="operador"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="4" name="boton"/></td>
                        <td><input type="submit" value="5" name="boton"/></td>
                        <td><input type="submit" value="6" name="boton"/></td>
                        <td><input type="submit" value="-" name="boton" class="operador"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="1" name="boton"/></td>
                        <td><input type="submit" value="2" name="boton"/></td>
                        <td><input type="submit" value="3" name="boton"/></td>
                        <td><input type="submit" value="/" name="boton" class="operador"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="0" name="boton"/></td>
                        <td><input type="submit" value="." name="boton"/></td>
                        <td><input type="submit" value="=" name="boton" class="igual"/></td>
                        <td><input type="submit" value="*" name="boton" class="operador"/></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>