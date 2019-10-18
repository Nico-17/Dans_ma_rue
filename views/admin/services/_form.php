<form action="" method="POST">
    <?= $form->input('services', 'Services'); ?>
    <?= $form->input('contact', 'Contact'); ?>
    <?= $form->input('tel', 'Téléphone'); ?>
    <?= $form->input('courriel', 'Email'); ?>
    <button class="btn btn-primary"><?= $bouton ?></button>
    <a href="<?= $router->url('admin_services') ?>" class="btn btn-secondary">Annuler</a>
</form>