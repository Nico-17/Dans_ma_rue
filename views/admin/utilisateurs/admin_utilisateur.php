<?php
use App\Connection;
use App\Auth;
use App\Table\UtilisateurTable;

Auth::check();

if($_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "admin/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$table = new UtilisateurTable($pdo);
[$users, $pagination] = $table->findPaginated();

$link = $router->url('admin_utilisateurs');
?>

<?php if(isset($_GET['delete'])): ?>
<div class="alert alert-success">
    L'utilisateur a bien été supprimé
</div>
<?php endif ?>

<h1 class="mb-3">Liste des utilisateurs</h1>

<a href="<?= $router->url('admin_utilisateur_new') ?>" class="btn btn-primary mb-3">Ajouter un utilisateur</a>

<div class="row">
    <?php foreach($users as $user): ?>
    <div class="col-md-12">
        <?php require 'admin_card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>
