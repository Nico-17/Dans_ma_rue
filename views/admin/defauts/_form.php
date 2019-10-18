<form action="" method="POST">
    <?= $form->input('lieu', 'Lieu'); ?>
    <?= $form->input('date_observation', 'Date d\'observation'); ?>
    <?= $form->input('date_fin', 'Date de fin'); ?>
    <?= $form->input('X', 'Coordonnées X'); ?>
    <?= $form->input('Y', 'Coordonnées Y'); ?>
    <?= $form->input('services', 'Services'); ?>
    <?= $form->input('etat', 'Etat'); ?>
    <?= $form->textarea('nature', 'Nature'); ?>

    <button class="btn btn-primary"><?= $bouton ?></button>
    <a href="<?= $router->url('admin_defauts') ?>" class="btn btn-secondary">Annuler</a>
    
</form>