<div class="container-fluid">
    <div class="row">
        <div>
            <h3>Modifica usuario</h3>
        </div>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Habilitado</th>
            </tr>
        </thead>
        <form class="form-horizontal" action="<?php echo site_url("tareas/pagina_modificacion")?>" method="post">
        <?php foreach($usuarios as $usuarios):?>
            <tr>
                <td><?php echo $usuarios->id?></td>
                <td><?php echo $usuarios->usuario?></td>
                <td><?php echo $usuarios->nombre?></td>
                <td><?php echo $usuarios->apellido?></td>
                <td><?php echo $usuarios->habilitado?></td>            
            </tr>
            <?php endforeach?>
            <tr>
                <td><button type="submit" class="btn btn-primary">Modificar</button></td>
            </tr>
            </form>
        </table>
    </div>
</div>