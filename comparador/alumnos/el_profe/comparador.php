<?php $a = $_GET['a']?>
<?php $b =  $_GET['b']?>
<?php print_r($_GET)?>
<?php if($a == 'hola' || $b == "hola"):?>
<span id="res">ok</span>
<?php endif ?>
<?php if($a == "chao" || $b == "chao-"):?>
<span id="res">No ok</span>
<?php endif ?>

<?php if($a == "hola" || $b == "hola") {
    echo '<span id="res">ok</span>';
} elseif ($a == "chao" || $b == "chao-") {
    echo '<span id="res">No ok</span>';
}
?>

<?php
$c = 'una variable con $a';
$d = "una variable con $a";
// $d = "una variable con " .$a;
?>
1: <?php echo $c ?>
<?php echo "\n"?>
2: <?php echo $d ?>










