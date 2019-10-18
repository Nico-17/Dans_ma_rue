<form action="" method="POST">
    <?= $form->input('lieu', 'Lieu'); ?>
    <?= $form->input('service', 'Service'); ?>
    <?= $form->textarea('nature', 'Nature'); ?>
    <?= $form->input('date_observation', 'Date d\'observation'); ?>
    <?= $form->input('date_fin', 'Date de fin'); ?>
    <button class="btn btn-primary"><?= $bouton ?></button>
    <a href="<?= $router->url('admin_defauts') ?>" class="btn btn-secondary">Annuler</a>
    
</form>