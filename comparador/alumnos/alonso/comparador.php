<html>
<head>
	<title>Comparador</title>
</head>
<body>
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
        $palabra1 = $_GET['P1'];
        $palabra2 = $_GET['P2'];
        if($palabra1.trim() === "" or palabra2.trim() === "")
        {
            $resultado = " ";
        }
        else
        {
            if($palabra1.trim() === $palabra2)
            {
                $resultado = "ok";
            }
            else
            {
                $resultado = "No ok";

            }
        }
        
    ?>
    </style>
    <form method="GET" action="comparador.php">
     <fieldset>
      <legend>Comparemos las palabras</legend>
         <input type="text" name='P1'>
         <input type="submit" name='submit1' value="Invertir"><br/>
         <input type="text" name='P2'><br/>
         <p><?php echo $resultado ?></p>
    </fieldset>
    </form>
</body>
</html>