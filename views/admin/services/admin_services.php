<?php
use App\Connection;
use App\Table\ServiceTable;
use App\Auth;

Auth::check();

$router->layout = "admin/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$table = new ServiceTable($pdo);
[$services, $pagination] = $table->findPaginated();

$link = $router->url('admin_services');
?>

<?php if(isset($_GET['delete'])): ?>
<div class="alert alert-success">
    Le service a bien été supprimé
</div>
<?php endif ?>

<h1 class="mb-3">Liste des services</h1>

<a href="<?= $router->url('admin_service_new') ?>" class="btn btn-primary mb-3">Ajouter un service</a>

<div class="row">
    <?php foreach($services as $service): ?>
    <div class="col-md-12">
        <?php require 'admin_card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>
