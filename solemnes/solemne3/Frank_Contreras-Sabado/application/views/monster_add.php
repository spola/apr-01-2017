<form action="<?php echo base_url('monsters/insert')?>" method="POST">
  <div class="form-group">
    <label>Monster name</label>
    <input type="text" class="form-control" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label>Species</label>
    <select class="form-control" name="species">
      <option>Lynian</option>
      <option>Herbivore</option>
      <option>Neopteron</option>
      <option>Temnoceran</option>
      <option>Bird Wyvern</option>
      <option>Flying Wyvern</option>
      <option>Piscine Wyvern</option>
      <option>Carapaceon</option>
      <option>Amphibian</option>
      <option>Primatius</option>
      <option>Leviathan</option>
      <option>Snake Wyvern</option>
      <option>Brute Wyvern</option>
      <option>Fanged Wyvern</option>
      <option>Elder Dragon</option>
    </select>
  </div>
  <div class="form-group">
    <label>Weakness</label>
    <select class="form-control" name="weakness">
      <option>Fire</option>
      <option>Water</option>
      <option>Ice</option>
      <option>Thunder</option>
      <option>Dragon</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Add Monster</button>
</form>