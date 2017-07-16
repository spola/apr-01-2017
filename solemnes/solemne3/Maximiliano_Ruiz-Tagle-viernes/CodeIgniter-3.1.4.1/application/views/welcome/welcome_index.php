<div class="container-fluid">
    <div class="row">
        <h3>Bienvenido a la pagina de Monster inc. Estos son los monstruos que se encuentran registrados actualmente.</h3>
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Monstruo</th>
                    <th>Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th>Estado</th>
                </tr>
            </thead>
        <?php foreach($monstruos as $monstruo):?>
                <tr>
                    <td><?php echo $monstruo->id?></td>
                    <td><?php echo $monstruo->nombre?></td>
                    <td><?php echo $monstruo->snombre?></td>
                    <td><?php echo $monstruo->apellido?></td>
                    <td><?php echo $monstruo->sapellido?></td>
                    <td><?php echo $monstruo->sexo?></td>
                    <td><?php echo $monstruo->email?></td>
                    <td><?php echo $monstruo->habilitado?></td>
                </tr>
        <?php endforeach?>
        </table>
        <div class="imagen"></div>
    </div>
</div>