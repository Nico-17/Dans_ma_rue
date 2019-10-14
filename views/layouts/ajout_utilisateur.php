<?php
$title = "Ajouter un utilisateur"; ?>
<?php require 'php/header.php' ?>
<?php require 'php/body.php' ?>

<!-- formulaire -->
<p class="font-weight-bold">Ajouter un utilisateur</p>
<form>
  <div class="form-group col-md-6">
    <label for="inputAddress">Identifiant</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="BaladeUrbaine">
  </div>
  <div class="form-group col-md-6">
    <label for="inputEmail4">Adresse mail</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="baladeurbaine@larochelle.fr">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Mot de passe</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
  </div>
  <div class="form-group col-md-4">
    <label for="inputState">Rôle</label>
    <select id="inputState" class="form-control">
      <option selected>--- Choisir---</option>
      <option>Administrateur</option>
      <option>Editeur</option>
      <option>Update</option>
      <option>Lecteur</option>
    </select>
  </div>
  <div class="text-center">
  <button type="reset" class="btn btn-secondary mr-2">Annuler</button>
  <button type="submit" class="btn btn-success ml-2">Enregistrer</button>
  </div>
</form>


<?php require 'php/footer.php' ?>