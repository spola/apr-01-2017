<div class="container-fluid">
    <div class="row">
        <h3>Bienvenido a la pagina de Monster inc. Estos son los monstruos que se encuentran registrados actualmente.</h3>
    
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
        <?php foreach($monstruos as $monstruo):?>
                <tr>
                    <td><?php echo $monstruo->id_monstruo?></td>
                    <td><?php echo $monstruo->nombre?></td>
                    <td><?php echo $monstruo->apellido?></td>
                    <td><?php echo $monstruo->email?></td>
                    <td><?php echo $monstruo->habilitado?></td>
                    <td><?php echo $monstruo->cargo?></td>
                </tr>
        <?php endforeach?>
        </table>
        <div class="imagen"></div>
    </div>
</div>