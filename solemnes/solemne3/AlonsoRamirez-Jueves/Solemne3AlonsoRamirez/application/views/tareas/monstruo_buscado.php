<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Monstruo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Cargo</th>
        </tr>
    </thead>
    <tr>
<?php foreach($monstruo as $mon_buscado):?>
        
            <td><?php echo $mon_buscado->id_monstruo?></td>
            <td><?php echo $mon_buscado->nombre?></td>
            <td><?php echo $mon_buscado->apellido?></td>
            <td><?php echo $mon_buscado->email?></td>
            <td><?php echo $mon_buscado->habilitado?></td>
            <td><?php echo $mon_buscado->cargo?></td>
<?php endforeach?>
    </tr>
</table>