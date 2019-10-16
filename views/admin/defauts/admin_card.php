<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
        <p class="text-muted">Date d'observation : <?= $defaut->getDateObserv()->format('d/m/Y')?></p>
        <p class="text-muted">Date de fin : <?= htmlentities($defaut->getDateFin()->format('d/m/Y'))?></p>
        <p>Service : <?= htmlentities($defaut->getService()) ?></p>
        <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
        <a href="<?= $router->url('admin_defaut', ['id' => $defaut->getID()]) ?>" class="btn btn-warning">Modifier</a>
        <form action="<?= $router->url('admin_defaut_delete', ['id' => $defaut->getID()]) ?>" method="POST" onsubmit="return confirm('Voulez vous vraiment effectuer cette action ?')" style="display:inline">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</div>