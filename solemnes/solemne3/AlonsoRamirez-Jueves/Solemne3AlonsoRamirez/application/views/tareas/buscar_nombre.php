<div class="container-fluid">
    <div class="row">
        <h3>Buscar monstruo por nombre.</h3>
        <form class="form-horizontal" method="post" action="<?php echo site_url("monstruos/monstruo_buscado")?>">
            <div class="form-group">
                <div class="col-md-4">
                    <label for="nombre">Nombre:</label> 
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required name="nombre"/>
                </div>
            </div>
            <div class="form-group"> 
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>


