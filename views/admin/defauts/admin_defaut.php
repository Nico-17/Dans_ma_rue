<?php
use App\Auth;
use App\Table\DefautTable;
use App\Connection;
use App\Model\Utilisateur;
use App\Table\UtilisateurTable;

Auth::check();

$router->layout = "admin/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

if($_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$table = new DefautTable($pdo);
[$defauts, $pagination] = $table->findPaginated();

$link = $router->url('admin_defauts');
?>

<?php if(isset($_GET['delete'])): ?>
<div class="alert alert-success">
    Le défaut a bien été supprimé
</div>
<?php endif ?>

<h1 class="mb-3">Liste des defauts</h1>

<a href="<?= $router->url('admin_defaut_new') ?>" class="btn btn-primary mb-3">Ajouter un défaut</a>

<div class="row">
    <?php foreach($defauts as $defaut): ?>
    <div class="col-md-12">
        <?php require 'admin_card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>
