<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
        <p class="text-muted">Date d'observation : <?= $defaut->getDateObserv()->format('d/m/Y')?></p>
        <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
        <p>Service : <?= htmlentities($defaut->getService()) ?></p>
        <p>Photo : <?= htmlentities($defaut->getPhoto()) ?></p>
    </div>
</div>