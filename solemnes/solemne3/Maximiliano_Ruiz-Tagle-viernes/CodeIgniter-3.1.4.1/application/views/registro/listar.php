<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Segundo Nombre</th>
            <th class="text-center">Apellido</th>
            <th class="text-center">Segundo Apellido</th>
            <th class="text-center">Sexo</th>
            <th class="text-center">Email</th>
        </tr>
    </thead>
    <tr>
<?php foreach($inicio as $inicio):?>
        <td><?php echo $inicio->id?></td>
        <td><?php echo $inicio->nombre?></td>
        <td><?php echo $inicio->snombre?></td>
        <td><?php echo $inicio->apellido?></td>
        <td><?php echo $inicio->sapellido?></td>
        <td><?php echo $inicio->sexo?></td>
        <td><?php echo $inicio->email?></td>
<?php endforeach?>
    </tr>
</table>