<?php
use App\Connection;
use App\Table\DefautTable;

$router->layout = "read/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$table = new DefautTable($pdo);
[$defauts, $pagination] = $table->findPaginated();

$link = $router->url('defaut');
?>

<h1>Liste des defauts</h1>

<div class="row">
    <?php foreach($defauts as $defaut): ?>
    <div class="col-md-12">
        <?php require 'read_card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>
