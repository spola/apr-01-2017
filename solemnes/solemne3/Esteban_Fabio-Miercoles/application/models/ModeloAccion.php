<table class="table table-condensed">
        <thead>
            <tr>
                <th>Id Registro</th>
                <th>Nombre</th>
                <th>Fecha Nacimiento</th>
                <th>Ciudad</th>
                <th>Email</th>
                <th>Puesto Trabajo</th>
            </tr>
        </thead>
        <tr>
            <?php foreach($Acciones as $Accion):?><td>
        <?php echo $Accion ->IdRegistro?>
            </td>
            <td><?php echo $Accion ->Nombre?></td>
            <td><?php echo $Accion ->FechaNacimiento?></td>
            <td><?php echo $Accion ->Ciudad?></td>
            <td><?php echo $Accion ->Email?></td>
            <td><?php echo $Accion ->PuestoTrabajo?></td>
        <?php endforeach?>
        </tr>
</table>
