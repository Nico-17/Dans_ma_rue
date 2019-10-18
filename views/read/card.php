<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
        <p class="text-muted">Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?></p>
        <p class="text-muted">Date de fin : <?= htmlentities($defaut->getDateFin())?></p>
        <p>Service : <?= htmlentities($defaut->getService()) ?></p>
        <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
        <p>Photo : <?= htmlentities($defaut->getPhoto()) ?></p>
    </div>
</div>