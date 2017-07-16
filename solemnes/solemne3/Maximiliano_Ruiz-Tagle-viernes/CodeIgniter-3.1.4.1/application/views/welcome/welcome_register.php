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
    <div class="form-group">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Primer Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required name="nombre"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="snombre">Segundo Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="snombre" placeholder="Ingrese segundo nombre" required name="snombre"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="apellido">Primer Apellido:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" required name="apellido"/>
            </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-2" for="sapellido">Segundo Apellido:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="spellido" placeholder="Ingrese segudo apellido" required name="sapellido"/>
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Sexo:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="sexo" placeholder="Ingrese el sexo" required name="sexo"/>
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
            <label class="control-label col-sm-2" for="estado">Estado:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" required name="estado"/>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </div>
</form>