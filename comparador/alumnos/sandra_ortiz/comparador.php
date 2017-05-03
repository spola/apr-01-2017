<?php
    
$a = $_GET['a'];
$b = $_GET['b'];


$ax = preg_replace("/\s+/","",$a);
$bx = preg_replace("/\s+/","",$b);

if ($ax == $bx)
{
    
    $res="ok";
}
else
{
    $res="No ok";
}

?>

<!DOCTYPE html>

   <html>
    
       <head>
           <title>TITULO </title>
       <style>
       body
            { 
            background-color: dimgray;
            color: black;
            }
       input[type = submit]
            {
                color:white;
                background: purple;
                border-radius: 1em;
                font-size: 20px;
            }
       input[type=text]
            {
                width:450px; 
                height:40px;
                background: white;
                font-size: 30px;
            }
       </style>
       </head>
        <body>
           <fieldset>
               <form method="get" action="comparador.php"> 
               a: <input  name = "a" type = "text" value = "<?php echo $a?>" />
                   <input value= "checar" name="checar" type="submit" />
                   <br>
                   <br>
               b: <input name = "b" type = "text" value = "<?php echo $b?>" />
                   <br>
                   <br>
                   <span id = "res"><?php echo $res ?></span>
               </form>
            </fieldset>
       </body>
    </html>


