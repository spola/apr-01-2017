<?php if(isset($mensaje)):?>
<div class="alert alert-info">
    <?php echo $mensaje?>
</div>
<?php endif?>
<?php if(isset($error)):?>
<div class="alert alert-danger">
    <?php echo $error?>
</div>
<?php endif?>

<form class="form-horizontal" method="post" action="<?php echo site_url("welcome/registrado") ?>">
<div class="row centro"><h1>Proceso de Registro</h1></div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="nombre">Nombre:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required name="nombre"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Ingrese email" required name="email"/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Ingrese password" required name="password"/>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Registrar</button>
    </div>
  </div>
</form>