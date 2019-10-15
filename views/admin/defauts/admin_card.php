<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
        <p class="text-muted">Date d'observation : <?= $defaut->getDateObserv()->format('d/m/Y')?></p>
        <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
        <p>Service : <?= htmlentities($defaut->getService()) ?></p>
        <p>Photo : <?= htmlentities($defaut->getPhoto()) ?></p>
        <p>
            <a href="<?= $router->url('admin_defaut', ['id' => $defaut->getID()]) ?>" class="btn btn-warning">Modifier</a>
            <a href="<?= $router->url('admin_defaut_delete', ['id' => $defaut->getID()]) ?>" class="btn btn-danger" onclick="return confirm('Voulez vous vraiment effectuer cette action ?')">Supprimer</a>
        </p>
    </div>
</div>