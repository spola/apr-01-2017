<form action="<?php echo base_url('monsters/update')?>" method="POST">
    <?php foreach($dataMonster as $value){ ?>
      
    <input type="hidden" name="id" value="<?php echo $value->id; ?>">
    <div class="form-group">
        <label>Monster name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $value->name; ?>">
      </div>
      <div class="form-group">
        <label>Species</label>
        <?php 
            $lista = array("Lynian"=>"Lynian",
                           "Herbivore"=>"Herbivore",
                           "Neopteron"=>"Neopteron",
                           "Temnoceran"=>"Temnoceran",
                           "Bird Wyvern"=>"Bird Wyvern",
                           "Flying Wyvern"=>"Flying Wyvern",
                           "Piscine Wyvern"=>"Piscine Wyvern",
                           "Carapaceon"=>"Carapaceon",
                           "Amphibian"=>"Amphibian",
                           "Primatius"=>"Primatius",
                           "Leviathan"=>"Leviathan",
                           "Snake Wyvern"=>"Snake Wyvern",
                           "Brute Wyvern"=>"Brute Wyvern",
                           "Fanged Wyvern"=>"Fanged Wyvern",
                           "Elder Dragon"=>"Elder Dragon");
            echo form_dropdown('species', $lista, $value->species, 'class="form-control"');
        ?>
      </div>
      <div class="form-group">
        <label>Weakness</label>
        <?php 
            $lista = array("Fire"=>"Fire",
                           "Water"=>"Water",
                           "Ice"=>"Ice",
                           "Thunder"=>"Thunder",
                           "Dragon"=>"Dragon");
            echo form_dropdown('weakness', $lista, $value->weakness, 'class="form-control"');
        ?>
      </div>
    <?php }?>
  <button type="submit" class="btn btn-default">Update Monster</button>
</form>