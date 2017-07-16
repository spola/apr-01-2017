<form class="form-horizontal" method="post" action="<?php echo site_url("monstruos/modificar")?>">
    <div class="form-group">
        <div class="form-group">
            <label class="control-label col-sm-2" for="id_monstruo">Id Monstruo:</label>
            <div class="col-sm-10"> 
                <input type="text" class="form-control" id="id_monstruo" placeholder="Ingrese id valido" required name="id_monstruo"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nombre">Primer Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required name="nombre"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="segudonombre">Segundo Nombre:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="segudonombre" placeholder="Ingrese segundo nombre" required name="segudonombre"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="apellido">Primer Apellido:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" required name="apellido"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="segudoapellido">Segundo Apellido:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="segudoapellido" placeholder="Ingrese segudo apellido" required name="segudoapellido"/>
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
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        
    </div>
</form>