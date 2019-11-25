<?php if ($defaut->getEtat() === 'en cours'): ?>
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
<?php endif ?>

<?php if ($defaut->getEtat() === 'à réaliser'): ?>
        <div class="item js-marker-a-realiser" data-lat="<?= htmlentities($defaut->getX()) ?>" 
        data-lng="<?= htmlentities($defaut->getY()) ?>" 
        data-infoarealiser="#<?= htmlentities($defaut->getId()) ?><br>
        <?= htmlentities($defaut->getLieu()) ?><br>
        Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?><br>
        Date de fin : <?= htmlentities($defaut->getDateFin())?><br>
        Coordonnées X : <?= htmlentities($defaut->getX()) ?><br>
        Coordonnées Y : <?= htmlentities($defaut->getY()) ?><br>
        Service : <?= str_replace('-', ' ',htmlentities($defaut->getServices())) ?><br>
        Etat : <?= htmlentities($defaut->getEtat()) ?><br>
        Description : <?= htmlentities($defaut->getNature()) ?>">
</div>
<?php endif ?>

<?php if ($defaut->getEtat() === 'résolu'): ?>
        <div class="item js-marker-resolu" data-lat="<?= htmlentities($defaut->getX()) ?>" 
        data-lng="<?= htmlentities($defaut->getY()) ?>" 
        data-inforesolu="#<?= htmlentities($defaut->getId()) ?><br>
        <?= htmlentities($defaut->getLieu()) ?><br>
        Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?><br>
        Date de fin : <?= htmlentities($defaut->getDateFin())?><br>
        Coordonnées X : <?= htmlentities($defaut->getX()) ?><br>
        Coordonnées Y : <?= htmlentities($defaut->getY()) ?><br>
        Service : <?= str_replace('-', ' ',htmlentities($defaut->getServices())) ?><br>
        Etat : <?= htmlentities($defaut->getEtat()) ?><br>
        Description : <?= htmlentities($defaut->getNature()) ?>">
</div>
<?php endif ?>

<?php if ($defaut->getEtat() === 'refusé'): ?>
        <div class="item js-marker-refuser" data-lat="<?= htmlentities($defaut->getX()) ?>" 
        data-lng="<?= htmlentities($defaut->getY()) ?>" 
        data-inforefuser="#<?= htmlentities($defaut->getId()) ?><br>
        <?= htmlentities($defaut->getLieu()) ?><br>
        Date d'observation : <?= $defaut->getDateObservation()->format('d/m/Y')?><br>
        Date de fin : <?= htmlentities($defaut->getDateFin())?><br>
        Coordonnées X : <?= htmlentities($defaut->getX()) ?><br>
        Coordonnées Y : <?= htmlentities($defaut->getY()) ?><br>
        Service : <?= str_replace('-', ' ',htmlentities($defaut->getServices())) ?><br>
        Etat : <?= htmlentities($defaut->getEtat()) ?><br>
        Description : <?= htmlentities($defaut->getNature()) ?>">
</div>
<?php endif ?>