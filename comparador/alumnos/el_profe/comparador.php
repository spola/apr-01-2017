<?php $a = $_GET['a']?>
<?php $b =  $_GET['b']?>
<?php print_r($_GET)?>
<?php if($a == "hola" || $b == "hola"):?>
<span id="res">ok</span>
<?php endif ?>
<?php if($a == "chao" || $b == "chao"):?>
<span id="res">No ok</span>
<?php endif ?>