<form action="" method="POST" enctype="multipart/form-data">
    <?= $form->input('lieu', 'Lieu'); ?>
    <?= $form->inputDate('date_observation', 'Date d\'observation'); ?>
    <?= $form->inputDate('date_fin', 'Date de fin'); ?>
    <?= $form->input('X', 'Coordonnées X'); ?>
    <?= $form->input('Y', 'Coordonnées Y'); ?>
    <?= $form->select('services', 'Services', $services); ?>
    <?= $form->select('etat', 'Etats', $etats); ?>
    <?= $form->file('photo', 'Photo'); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php if ($defaut->getPhoto()): ?>
                <img src="/uploads/defauts/<?= $defaut->getPhoto() ?>" alt="" class="w-100">
            <?php endif ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    
    <?= $form->textarea('nature', 'Nature'); ?>

    <button class="btn btn-primary"><?= $bouton ?></button>
    <a href="<?= $router->url('contrib_defauts') ?>" class="btn btn-secondary">Annuler</a>
    
</form>