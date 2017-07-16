<div class="container">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
          <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex6-collapse">
                    <span class="sr-only">Desplegar navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="http://32kaeru.up.seesaa.net/game/E382B8E383B3E382AAE382A6E382ACE7B48BE7ABA0s.gif"  alt="Logo" width="35" height="35"></a>
            </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo site_url("monsters/irInsert")?>">Add monster</a></li>
                <li><a href="<?php echo site_url("login/logout")?>">Logout</a></li>
              </ul>
        </div>
      </div>
    </nav>
</div>
<table class="table table-bordered">
    <thead>
        <tr class="info">
            <th>#</th>
            <th>Name</th>
            <th>Species</th>
            <th>Weakness</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tr class="info">
        <?php foreach($monsters as $monster):?>
            <td><?php echo $monster->id?></td>
            <td><?php echo $monster->name?></td>
            <td><?php echo $monster->species?></td>
            <td><?php echo $monster->weakness?></td>
            <td><a href="<?php echo base_url('monsters/edit')."/".$monster->id; ?>">Edit</a></td>
        <?php endforeach?>
    </tr>
</table>