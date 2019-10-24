<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Service : <?= str_replace('-', ' ',htmlentities($service->getServices())) ?> </h5>
        <p>Contact : <?= htmlentities($service->getContact())?></p>
        <p>Téléphone : <?= htmlentities($service->getTel())?></p>
        <p>Email : <?= htmlentities($service->getCourriel()) ?></p>
        <a href="<?= $router->url('admin_service', ['services' => $service->getServices()]) ?>" class="btn btn-warning">Modifier</a>
        <form action="<?= str_replace(' ', '',$router->url('admin_service_delete', ['services' => $service->getServices()])) ?>" method="POST" onsubmit="return confirm('Voulez vous vraiment effectuer cette action ?')" style="display:inline">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</div>