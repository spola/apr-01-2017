<?php
// $_POST Arreglo asociativo donde están los parámetros enviados a nuestra página por este medio
$texto = $_POST['texto'];
$numero = $_POST['numero'];
$numero_sumado = $numero +1 ;
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        body { 
            background-color: black;
            color: white;
        }
        </style>
    </head>
    <body>
        <fieldset>
            <legend>Comparador</legend>
            <form method="post" action="formulario.php">
                <!-- method: get | post | put | delete -->
                <!-- action: Lugar donde se recibe la llamada del formulario -->

                Cuadro de texto: <input type="text" name="texto"/>
                <br/>
                Cuadro de números: <input type="number" name="numero" value="<?php echo $numero?>" max="10000"/>
                <br/>
                Campo que no se envía: <input type="text" value="<?php echo $numero_sumado?>"/>
                <!-- Campo que no se envía porque no tiene name -->
                <br/>

                <label>
                    Correo
                    <input type="email" />
                </label>
                <br/>
                <label for="mi_campo" >Con label for</label>
                <input type="text" name="con_label" id="mi_campo"/>
                <br/>

                <input type="radio" name="radio" value="1"/>
                <input type="radio" name="radio" value="2"/>
                <input type="radio" name="radio" value="3"/>
                <br/>
                
                <select name="opciones">
                    <option>Opción 1</option>
                    <option value="2">Opción 2</option>
                    <option value="3" selected>Opción 3</option>
                </select>
                <br/>
                <label>
                    <input type="checkbox" name="checkbox" /> Aceptar terminos de uso
                </label>
                <br/>
                <textarea cols="45" rows="10" name="cuadro_texto"><?php echo $texto ?></textarea>
                <br/>
                <input type="button" value="No manda lejos" id="no-envia"/>
                <br/>
                <input type="submit" value="Mandar lejos"/>
                <button>Enviar lejos también</button>
            </form>
        </fieldset>
        
        <pre>
<?php print_r($_POST) ?>
<?php print_r($_GET) ?>
        </pre>
        <script>
            document
                .getElementById("no-envia")
                .addEventListener("click", function() {
                    alert("hola");
                });
        </script>
    </body>
</html>