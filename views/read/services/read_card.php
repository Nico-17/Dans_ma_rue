<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Service : <?= htmlentities($service->getServices()) ?> </h5>
        <p>Contact : <?= htmlentities($service->getContact())?></p>
        <p>Téléphone : <?= htmlentities($service->getTel())?></p>
        <p>Email : <?= htmlentities($service->getCourriel()) ?></p>
    </div>
</div>