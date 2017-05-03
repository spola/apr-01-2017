<?php

$a = str_replace(' ', '', $_GET['a']);
$b = str_replace(' ', '', $_GET['b']);

if (strcmp($a, $b) == 0) {
   $res = "ok";
}
else{
    $res = "No ok";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            button{
                background-color : lightcoral;
                border: lightcoral;
                border: 1px solid;
                border-radius: 10px;
                color: white; 
                font-size: 20px;                            
            }
           input[type=text]{
                width:450px; 
                height:40px;
                font-size: 30px;
                margin-bottom: 10px;
            }
                        
        </style>
    </head>
    
    <body>
        <form method="get" action="comparador.php">
            <fieldset>
                <legend>Comparamos las palabras:</legend>
                <input type="text" name="a" />           
            <button>comparar</button>
            <br/>
            <input type="text" name ="b"/>
            <br/>
            <span id = "res"><?php echo $res?></span>
       </fieldset>
     </form>  
</body>
</html>
