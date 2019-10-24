<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
        <?php if($defaut->getPhoto()): ?>
            <img src="/uploads/defauts/<?= $defaut->getPhoto() ?>" alt="<?= htmlentities($defaut->getLieu()) ?>" class="w-100 card-img-top mt-3 mb-4">
        <?php endif ?>
        <p class="text-muted">Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?></p>
        <p class="text-muted">Date de fin : <?= htmlentities($defaut->getDateFin())?></p>
        <p>Coordonnées X : <?= htmlentities($defaut->getX()) ?></p>
        <p>Coordonnées Y : <?= htmlentities($defaut->getY()) ?></p>
        <p>Service : <?= str_replace('-',' ',htmlentities($defaut->getServices())) ?></p>
        <p>Etat : <?= htmlentities($defaut->getEtat()) ?></p>
        
        <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
        <a href="<?= $router->url('admin_defaut', ['id' => $defaut->getID()]) ?>" class="btn btn-warning">Modifier</a>
        <form action="<?= $router->url('admin_defaut_delete', ['id' => $defaut->getID()]) ?>" method="POST" onsubmit="return confirm('Voulez vous vraiment effectuer cette action ?')" class="d-inline">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</div>