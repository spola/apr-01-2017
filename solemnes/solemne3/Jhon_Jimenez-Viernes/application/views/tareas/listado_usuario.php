<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Estado</th>
        </tr>
    </thead>
<?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?php echo $usuario->id?></td>
            <td><?php echo $usuario->nombre?></td>
            <td><?php echo $usuario->apellido?></td>
            <td><?php echo $usuario->usuario?></td>
            <td><?php echo $usuario->habilitado?></td>
        </tr>
<?php endforeach?>
</table>