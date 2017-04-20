<!DOCTYPE HTML>
<html>
<head>
	<title>Mi Titulo xD</title>
    <style type="text/css">
    input[type=text]{
        width: 450px;
        margin-bottom: 30px;
        height: 40px;
        color:black;
        font-size:30px;
    }
    input[type="submit"]{
        background-color:lightcoral;
        color:white;
        width: 100px;
        height: 40px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        font-size:20px;
    }
    </style>
</head>
<body>
        <?php
        if(isset($_GET['a']) && isset($_GET['b']))
        {
            $a1 = $_GET['a'];
            $b1 = $_GET['b'];
            $a = str_replace(" ","",$a1);
            $b = str_replace(" ","",$b1);
            {
                if($a === $b || ($b === $a))
                {
                    $res = "ok";
                }
                else
                {
                    $res = "No ok";
                }
            }
        }
        else 
        {
            $res = "";
        }
        
        ?>
        <form method="GET" action="comparador.php">
         <fieldset>
          <legend>Comparemos las palabras</legend>
             <input type="text" name='a'>
             <input type="submit" name='submit1' value="comparar"><br>
             <input type="text" name='b'>
             <div><span id=res><?php echo $res?></span></div>
     </fieldset>
    </form>
</body>
</html>