<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre Tarea</th>
            <th>Prioridad</th>
            <th>Estado Tarea</th>
        </tr>
    </thead>
    <tr>
<?php foreach($tareas as $tarea):?>
   <td><?php echo $tarea->nombreTarea?></td>
   <td><?php echo $tarea->prioridad?></td>
   <td><?php echo $tarea->estadoTarea?></td>
<?php endforeach?>
    </tr>
</table>