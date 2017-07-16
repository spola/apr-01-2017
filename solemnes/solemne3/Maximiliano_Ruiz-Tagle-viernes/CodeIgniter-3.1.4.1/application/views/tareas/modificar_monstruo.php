<div class="container-fluid">
    <div class="row">
        <div>
            <h3>Modificar uno de los monstruos que se encuentran registrados segun su ID</h3>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Monstruo</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Sexo</th>
                <th>Email</th>
            </tr>
        </thead>
        <form class="form-horizontal" action="<?php echo site_url("monstruos/pagina_modificacion")?>" method="post">
        <?php foreach($monstruos as $monstruo):?>
    
            <tr>
                <td><?php echo $monstruo->id?></td>
                <td><?php echo $monstruo->nombre?></td>
                <td><?php echo $monstruo->snombre?></td>
                <td><?php echo $monstruo->apellido?></td>
                <td><?php echo $monstruo->sapellido?></td>
                <td><?php echo $monstruo->sexo?></td>
                <td><?php echo $monstruo->email?></td>
            
            </tr>
            <?php endforeach?>
            <tr>
                <td><button type="submit" class="btn btn-primary">Modificar</button></td>
            </tr>
            </form>
        </table>
    </div>
</div>