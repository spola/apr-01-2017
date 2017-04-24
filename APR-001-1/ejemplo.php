<head>
  <meta charset="UTF-8">
</head>

Hola Mundo

<?php
//Acá definimos una variables
/* 
Comentario de varias líneas
*/

$variable = "texto";
$numero = 1;
$arreglo = array();

$arreglo2 = array(0, 1, 2, 3);
$arreglo3 = array(
	"a" => 10,
	"b" => 20,
	"c" => 30
);



?>
<br/>
<?php echo $variable ?>
<br/>
<?php print_r($arreglo2) ?>
<br/>
<pre>
<?php print_r($arreglo3) ?>
</pre>
<h1>¿Y cómo sumamos?</h1>
<?php 
$a = 1;
$b = 2;
echo $a + $b;
?>
<h1>Sumar string</h1>
<?php 

$str1 = "1hola1";
$str2 = "10";

echo $str1 + $str2;
echo "<br/>";
echo $str1 . $str2;
?>

