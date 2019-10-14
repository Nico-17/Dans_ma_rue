<?php
$title = "Declarer un defaut";
require 'php/header.php' ?>
<?php require 'php/body.php' ?>

<!-- formulaire -->
<p class="font-weight-bold"><span class="text">Déclarer un défaut</span></p>
<form>
    <div class="form-group col-md-6">
    <label for="inputState">Secteur</label>
        <select id="inputState" class="form-control">
        <option selected>--- Choisir---</option>
        <option>Minimes</option>
        <option>Tasdon</option>
        <option>Bongraine</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Nature du défaut</label>
        <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="form-group col-md-6">
    <label for="inputState">Secteur</label>
        <select id="inputState" class="form-control">
        <option selected>--- Choisir---</option>
        <option>Minimes</option>
        <option>Tasdon</option>
        <option>Bongraine</option>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="inputAddress">Numéro de rue</label>
        <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="mb-3 form-group col-md-6 mb-3" size="3">
        <label for="inputAddress">Photo</label>
        <input type="file" accept="image/*" capture="camera" class="form-control" id="inputAddress">
    </div>
    <div class="mb-3 col-md-6">
    <label for="validationTextarea">Description</label>
    <textarea class="form-control" id="validationTextarea" required></textarea>
    <div class="invalid-feedback">
      Veuillez renseigner la description 
    </div>
  </div>

  </div>
  <div class="text-center">
  <button type="reset" class="btn btn-secondary mr-2">Annuler</button>
  <button type="submit" class="btn btn-success ml-2">Enregistrer</button>
  </div>
</form>

<?php require 'php/footer.php' ?>