<!DOCTYPE html>
<html>    
    <head>
        <title>Comparador</title>
        <meta charset="utf-8">
    </head>
    <body>       
        <form action="comparador.php" method="get">
            
            <INPUT type=text name="palabra1" value="" />
            <INPUT type=text name="palabra2" value="" />
            <INPUT type=submit name="enviar" value="enviar" />
            <label> </label>
        </form>  
        <?php 
            $a = isset($_GET["palabra1"]) ? $_GET["palabra1"] : null;
            $b = isset($_GET["palabra2"]) ? $_GET["palabra2"] : null;
            $c = isset($_GET["enviar"]) ? $_GET["enviar"] : null;
            if($c == true)
            {
                if($a===$b){echo 'OK';} 
                else{echo "NO OK";}             
            }               
        ?>
    </body>   
</html>