<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Prioridad</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tr>
<?php foreach($tareas as $tarea):?>
        <td><?php echo $tarea->nombre?></td>
        <td><?php echo $tarea->prioridad?></td>
        <td><?php echo $tarea->estado?></td>
<?php endforeach?>
    </tr>
</table>