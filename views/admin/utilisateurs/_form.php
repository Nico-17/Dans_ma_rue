<form action="" method="POST">
    <?= $form->input('prenom', 'Prenom'); ?>
    <?= $form->input('nom', 'Nom'); ?>
    <?= $form->input('role', 'Role'); ?>
    <?= $form->select('acces', 'Acces', $access); ?>
    <?= $form->input('username', 'Nom d\'utilisateur'); ?>
    <?= $form->input('password', 'Mot de passe'); ?>
    <button class="btn btn-primary"><?= $bouton ?></button>
    <a href="<?= $router->url('admin_utilisateurs') ?>" class="btn btn-secondary">Annuler</a>
    
</form>