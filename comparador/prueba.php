<style>
.negro {
    font-weight: bolder;
}
</style>

<?php $a = $_GET['a']?>
<?php $b = $_GET['b']?>


<form action="prueba.php" method="get">

<input type="text" name="a" value="" />
<input type="text" name="b" value="<?php echo $b;?>"/>

<input type="submit" value="enviar"/>
</form>

<ul>
<li><?php echo $a?></li>
<li><?php echo $b?></li>
</ul>

<p>parrafo</p>
<p>parrafo 2</p>
<span>un texto</span> <span>Otro texto</span>

lorem <span class="negro">ipsum</span> dolor sit

<b>un negrito</b>