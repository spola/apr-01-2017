<html>
<head>
	<title>asdjkas</title>
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
        $comienzo = $_GET['a'];
        $termino = $_GET['b'];
        if($comienzo.trim() === "" or $termino.trim() === "")
        {
            $resultado = "";
        }
        else
        {
            if($comienzo.trim() === $termino or $termino.trim() === $comienzo)
            {
                $resultado = "ok";
            }
            else
            {
                $resultado = "no ok";
            }
        }
        ?>
    </style>
    <form method="GET" action="comparar.php">
     <fieldset>
      <legend>Comparemos las palabras</legend>
         <input type="text" name='a'>
         <input type="submit" name='submit1' value="comparar"><br/>
         <input type="text" name='b'>
         <div><span id=res><?php echo $resultado?></span></div>
     </fieldset>

    </form>
</body>
</html>