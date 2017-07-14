<?php
$n = 0;

for($i = 0; $i < 10; $i++) {
    $n = $i;
}

if($n == 10) {
    $res = "si";
} else {
    $res = "no";
}

$arreglos1 = array();
$arreglos2 = array(1,2,3,4,5);
$arreglos3 = array(
    1=>1,
    "hola" => "v",
    "chao" => "v2",
    "llave" => "valor",
    "indice" => "contenido"
);
$valor = $arreglo3[1]; // 1
$hola =  $arreglo3['hola']; // "v"

//foreach( $nombreArreglo as $valor)
foreach($arreglos3 as $indice => $contenido) {
    // hola, chao, llave, indice
    // v, v2, valor, contenido
    echo "llave: " . $indice ." :";
    echo $contenido . "\n";
}

$n = count($arreglos3);

$t = "texto";
$t1 = "10texto";
$num = 10;

$r1 = $t + $num;
$r2 = $num + $t;
$r3 = $num + $t1; //brujería
$r4 = $t .  $t1;


$vars = $_GET;
//http://localhost/APR-001-2/index.php?p=1&p2=2
// $_GET = array( "p" => 1, "p2"=>2)
if(isset($_GET['llave'])){
    echo "Si lo está";
}
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Mi titulo</title>
        <style>
            #un-id {
                color:coral;
            }
            .verde {
                color: green;
            }
            span {
                color:blue;
            }
            p {
                border: red 3px solid;
            }
            #unp {
                border-style: dashed;
            }
            /* Un comentario */
        </style>
    </head>
    <body>
        <h1>Mi res es:</h1>
        <?php echo $res ?>
        <pre>
<?php print_r($vars) ?>
<?php print_r( $arreglos2) ?>
        </pre>
        <ul>
            <li><?php echo $r1;?></li>
            <li><?php echo $r2; ?></li>
            <li><?php echo $r3; ?></li>
            <li><?php echo $r4; ?></li>
        </ul>
        
        <!-- Un comentario html -->
        <h1>Mis primeros tags</h1>
        <p>Lorem ipsum dolor sit</p>
        <p id="unp">Más parrafos</p>
        <span>texto</span><span> en un span sin salto de línea</span>
        <br/>
        <hr/>
        <h2>Mi segundo título</h2>
        <h3>Mi tercer título</h3>
        <span class="verde">Quiero un color!!!</span>
<span id="un-id" class="verde">Quiero un color!!!</span>
    </body>
</html>