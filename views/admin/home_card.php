<div class="item js-marker" data-lat="<?= htmlentities($defaut->getX()) ?>" 
data-lng="<?= htmlentities($defaut->getY()) ?>" 
data-info="#<?= htmlentities($defaut->getId()) ?><br>
        <?= htmlentities($defaut->getLieu()) ?><br>
        Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?><br>
        Date de fin : <?= htmlentities($defaut->getDateFin())?><br>
        Coordonnées X : <?= htmlentities($defaut->getX()) ?><br>
        Coordonnées Y : <?= htmlentities($defaut->getY()) ?><br>
        Service : <?= str_replace('-', ' ',htmlentities($defaut->getServices())) ?><br>
        Etat : <?= htmlentities($defaut->getEtat()) ?><br>
        Description : <?= htmlentities($defaut->getNature()) ?>">
</div>