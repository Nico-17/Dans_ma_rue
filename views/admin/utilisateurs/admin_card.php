<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">#<?= htmlentities($user->getId()) ?> </h5>
        <p>Prenom : <?= htmlentities($user->getPrenom()) ?> </p>
        <p>Nom : <?= htmlentities($user->getNom())?></p>
        <p>Role : <?= htmlentities($user->getRole())?></p>
        <p>Accès : <?= htmlentities($user->getAcces()) ?></p>
        <p>Nom d'utilisateur : <?= htmlentities($user->getUsername()) ?></p>
        <p>Mot de passe : <?= htmlentities($user->getPassword()) ?></p>
        <a href="<?= $router->url('admin_utilisateur', ['id' => $user->getID()]) ?>" class="btn btn-warning">Modifier</a>
        <form action="<?= $router->url('admin_utilisateur_delete', ['id' => $user->getID()]) ?>" method="POST" onsubmit="return confirm('Voulez vous vraiment effectuer cette action ?')" style="display:inline">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</div>