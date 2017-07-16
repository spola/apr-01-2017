<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $accionEjecutada = false; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro de mounstros</title>
        
	    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url("estilo/css/registroDeMounstros.css")?>">
    </head>
    <body class="container">
        <div class="row">
            <div class="col-xs-offset-4 col-xs-8">
                <h1><b>Edición de un mounstro</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-2 col-xs-4">
                <h3>Seleccione un mounstro a editar</h3>
            </div>
            <div class="col-xs-3">
                <select class="form-control" name="nombresDeMounstros">
                    <option class="active">Seleccionar</option>
                    <?php foreach($nombreMounstros as $clave) {?>
                    <option><?= $clave->mou_nombre;?></option>
                    <?php };?>
                </select>
            </div>
        </div>
        <div class="row centro">
            <div class="col-xs-offset-2 col-xs-8">
                <form class="form-horizontal" method="post" action="<?php echo site_url("Mounstro/actualizarMounstro")?>">
                    <div class="form-group">
                        <div class="col-xs-10">
                            <input type="hidden" class="form-control" id="IDid" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombreId" class="col-xs-2">Nombre: </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="nombreId" name="nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="especialidadId" class="col-xs-2">Especialidad: </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="especialidadId" name="especialidad" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="areaDeTrabajoId" class="col-xs-2">Área de trabajo: </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="areaDeTrabajoId" name="areaDeTrabajo" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fechaDeContratacionId" class="col-xs-2">Fecha de contratación: </label>
                        <div class="col-xs-10">
                            <input type="date" class="form-control" id="fechaDeContratacionId" name="fechaDeContratacion" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <div class="btn-group">
                                <input type="submit" class="btn btn-info" value="Editar">
                                <input type="reset" class="btn btn-warning" value="Limpiar">
                                <input type="button" class="btn btn-danger" value="Volver" onclick="volver()">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p id="a"></p>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            function volver()
            {
                window.location = "<?php echo site_url("Mounstro/buscarMounstros")?>";
            }
        </script>
        <script>
            //obtener el nombre y pasarlo con val() como parametro despues de la función del controlador y refrescar
            $(document).ready(function(){
                $("select[name=nombresDeMounstros]").change(function(){
                    var nombre = $("select[name=nombresDeMounstros]").val();
                    if(nombre !== 'Seleccionar')
                    {
                        mostrarDatos(nombre);
                    }
                })
            })
            
            function mostrarDatos(valor){
                $.ajax(
                {
                url:"<?php echo site_url("Mounstro/llenarCamposConDatosDelMounstroSeleccionado")?>",
                    type:"POST",
                    data:{buscar:valor},
                    success:function(respuesta){
                        var registros = eval(respuesta);
                        $("input[name=id]").val(registros[0]["mou_id"]);
                        $("input[name=nombre]").val(registros[0]["mou_nombre"]);
                        $("input[name=especialidad]").val(registros[0]["mou_especialidad"]);
                        $("input[name=areaDeTrabajo]").val(registros[0]["mou_area_trabajo"]);
                        $("input[name=fechaDeContratacion]").val(registros[0]["mou_fecha_contratacion"]);
                    }
                });
            }
        </script>
    </body>
</html>