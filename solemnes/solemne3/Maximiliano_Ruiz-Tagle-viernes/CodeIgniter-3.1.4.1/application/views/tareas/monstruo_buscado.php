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
    <tr>
        <?php foreach($monstruo as $mon_buscado):?>
        
        <td><?php echo $mon_buscado->id?></td>
        <td><?php echo $mon_buscado->nombre?></td>
        <td><?php echo $mon_buscado->snombre?></td>
        <td><?php echo $mon_buscado->apellido?></td>
        <td><?php echo $mon_buscado->sapellido?></td>
        <td><?php echo $mon_buscado->sexo?></td>
        <td><?php echo $mon_buscado->email?></td>
        
        <?php endforeach?>
    </tr>
</table>