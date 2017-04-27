<?php
if (isset($_GET['a']) & isset($_GET['b']))
    {
        $a = $_GET['a'];
        $a = strtolower($a);
        $a = str_replace(' ','',$a);
        $b = $_GET['b'];
        $b = strtolower($b);
        $b = str_replace(' ','',$b);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Comarador</title>
        <meta charset="utf-8">
        <style>
            input[type="text"]
            {
                height: 40px;
                width: 450px;
            }
            input[type=submit]
            {
                background: #FFE8C7;
                color: white;
                font-size: 20px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <legend>Comparador</legend>
            <form method="get" action="comparador.php">

                <input type="text" name="a" value="<?php echo $a?>"/>
                
                <input type=submit>
                <br/>
                <input type="text" name="b" value="<?php echo $b?>"/>
                <br/>
                <span id="res"><?php 
                    if(strcmp($a,$b) == 0) 
                    {
                        echo "ok";
                    }
                    else
                    {
                        echo "No ok";
                    }
                ?></span>
    
            </form>
        </fieldset>
        

    </body>
</html>