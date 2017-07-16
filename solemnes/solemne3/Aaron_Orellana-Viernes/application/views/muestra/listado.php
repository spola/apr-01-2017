<table class="table table-striped">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Habilitado</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tr>
<?php foreach($registros as $registro):?>
   <td><?php echo $registro->usuario?></td>
   <td><?php echo $registro->habilitado?></td>
   <td><?php echo $registro->nombre?></td>
<?php endforeach?>
    </tr>
</table>