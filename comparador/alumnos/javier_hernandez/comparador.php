<!DOCTYPE html>
<html>    
    <head>
        <meta charset="utf-8">
        <title>Comparador</title>        
    </head>
    <body>       
        <form action="comparador.php" method="get">
            
            <INPUT type=text name="palabra1" value="" />
            <INPUT type=text name="palabra2" value="" />
            <INPUT type=submit name="enviar" value="enviar" />
        </form>  
        <?php            
            $a = isset($_GET["palabra1"]) ? $_GET["palabra1"] : null;
            $b = isset($_GET["palabra2"]) ? $_GET["palabra2"] : null;
            $c = isset($_GET["enviar"]) ? $_GET["enviar"] : null;
            
	        $ab = str_replace(' ', '', $a);
            $bb = str_replace(' ', '', $b);
            
            if($c == true)
            {
                if($ab===$bb){echo 'OK';} 
                else{echo "NO OK";}             
            }               
        ?>
    </body>   
</html>