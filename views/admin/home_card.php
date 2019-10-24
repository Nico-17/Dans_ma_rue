<div class="item js-marker" data-lat="<?= htmlentities($defaut->getX()) ?>" data-lng="<?= htmlentities($defaut->getY()) ?>" data-lieu="">
    <h5>#<?= htmlentities($defaut->getId()) ?> <?= htmlentities($defaut->getLieu()) ?> </h5>
    <p>Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?></p>
    <p>Date de fin : <?= htmlentities($defaut->getDateFin())?></p>
    <p>Coordonnées X : <?= htmlentities($defaut->getX()) ?></p>
    <p>Coordonnées Y : <?= htmlentities($defaut->getY()) ?></p>
    <p>Service : <?= htmlentities($defaut->getServices()) ?></p>
    <p>Etat : <?= htmlentities($defaut->getEtat()) ?></p>
    <p>Description : <?= htmlentities($defaut->getNature()) ?></p>
</div>