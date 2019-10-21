<form action="" method="POST">
    <?= $form->input('lieu', 'Lieu'); ?>
    <?= $form->inputDate('date_observation', 'Date d\'observation'); ?>
    <?= $form->inputDate('date_fin', 'Date de fin'); ?>
    <?= $form->input('X', 'Coordonnées X'); ?>
    <?= $form->input('Y', 'Coordonnées Y'); ?>
    <?= $form->select('services', 'Services', $services); ?>
    <?= $form->select('etat', 'Etats', $etats); ?>
    <?= $form->textarea('nature', 'Nature'); ?>

    <button class="btn btn-primary"><?= $bouton ?></button>
    <a href="<?= $router->url('admin_defauts') ?>" class="btn btn-secondary">Annuler</a>
    
</form>