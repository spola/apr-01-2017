<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Habilitado</th>
        </tr>
    </thead>
    <tr>
    <?php foreach($usuario as $usuario_buscado):?>

                <td><?php echo $usuario_buscado->id?></td>
                <td><?php echo $usuario_buscado->nombre?></td>
                <td><?php echo $usuario_buscado->apellido?></td>
                <td><?php echo $usuario_buscado->usuario?></td>
                <td><?php echo $usuario_buscado->habilitado?></td>
    <?php endforeach?>
    </tr>
</table>