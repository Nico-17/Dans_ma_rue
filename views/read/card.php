<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
        <p class="text-muted">Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?></p>
        <p class="text-muted">Date de fin : <?= htmlentities($defaut->getDateFin())?></p>
        <p>Coordonnées X : <?= htmlentities($defaut->getX()) ?></p>
        <p>Coordonnées Y : <?= htmlentities($defaut->getY()) ?></p>
        <p>Service : <?= htmlentities($defaut->getServices()) ?></p>
        <p>Etat : <?= htmlentities($defaut->getEtat()) ?></p>
        <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
    </div>
</div>