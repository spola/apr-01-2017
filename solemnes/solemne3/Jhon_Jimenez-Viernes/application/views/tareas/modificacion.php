<link rel="stylesheet" href="<?php echo base_url('assets/css/modificacion.css')?>"/>
<div class="container">
    <h1>Modificacion de usuario</h1>
 <form class="form-horizontal" method="post" action="<?php echo site_url("Tareas/modificar")?>">
     <table class="table table-bordered">
       <tr>
           <div class="form-group">
               <td>
                <label class="control-label col-sm-2" for="id">Id:</label>
                </td>
                <div class="col-sm-10"> 
                 <td>
                  <input type="text" class="form-control" id="id" placeholder="Ingrese id" required name="id"/>
                  </td>
                </div>
            </div>
       </tr>
       <tr>
            <div class="form-group">
            <td>
            <label class="control-label col-sm-2" for="nombre">Nombre:</label>
            </td>
            <div class="col-sm-10"> 
             <td>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" required name="nombre"/>
              </td>
            </div>
          </div>
         </tr>

         <tr>
          <div class="form-group">
           <td>
            <label class="control-label col-sm-2" for="apellido">Apellido:</label>
            </td>
            <div class="col-sm-10"> 
             <td>
              <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" required name="apellido"/>
              </td>
            </div>
          </div>
       </tr>

       <tr>
       <td>
        <label class="control-label col-sm-2" for="email">Email:</label>
        </td>
        <div class="col-sm-10">
         <td>
          <input type="email" class="form-control" id="usuario" placeholder="Ingrese email" required name="email"/>
          </td>
        </div>
        </tr>

      <tr>
      <div class="form-group">
       <td>
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        </td>
        <div class="col-sm-10"> 
         <td>
          <input type="password" class="form-control" id="password" placeholder="Ingrese password" required name="password"/>
          </td>
        </div>
      </div>
        </tr>

        <tr>
        <div class="form-group">
        <td>
        <label class="control-label col-sm-2" for="estado">Estado:</label>
        </td>
        <div class="col-sm-10">
          <td> 
          <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" required name="estado"/>
           </td>
        </div>
      </div>
      </tr>

      <tr>
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
        <td></td>
         <td>
          <button type="submit" class="btn btn-primary">Guardar</button>
          </td>
        </div>
      </div>
      </tr>
  </table>
</form>
</div>