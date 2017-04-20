<!DOCTYPE html>
<html>
<head>
	<title>Comparador</title>
    <style>
        input[type=text]{
            width: 450px;
            margin-bottom: 30px;
            height: 40px;
            color:black;
            font-size:30px;
        }
        input[type="submit"]
        {
            background-color:lightcoral;
            color:white;
            width: 100px;
            height: 40px;
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            font-size:20px;
        }
    <?php
        if(isset($_GET['a']) && (isset($_GET['b']))) //isset para cuando las variables tienen valor realiza funcion
        {
            $primera = $_GET['a'];
            $segunda = $_GET['b'];
            if(trim($primera === $segunda) || trim($segunda === $primera))
            {
                $res = "OK";
            }
            else
            {
                $res = "NO OK";
            }
        }
        else
        {
            $res = "";
        }
        
    ?>
    </style>
</head>
<body>
    
    <form method="GET" action="comparador.php">
     <fieldset>
      <legend>Comparemos las palabras</legend>
         <input type="text" name='a'>
         <input type="submit" name='submit1' value="Comparar"><br/>
         <input type="text" name='b'>
         <div><span id = res><?php echo $res?></span></div><!--llamado de la variable $res-->
     </fieldset>
    </form>
</body>
</html>