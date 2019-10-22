<?php
use App\Connection;
use App\Table\ServiceTable;
use App\Auth;

Auth::check();

$router->layout = "edit/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$table = new ServiceTable($pdo);
[$services, $pagination] = $table->findPaginated();

$link = $router->url('edit_services');
?>

<h1 class="mb-3">Liste des services</h1>

<div class="row">
    <?php foreach($services as $service): ?>
    <div class="col-md-12">
        <?php require 'edit_card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>
