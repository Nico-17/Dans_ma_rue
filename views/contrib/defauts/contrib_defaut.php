<?php
use App\Connection;
use App\Auth;
use App\Table\DefautTable;

Auth::check();

if($_SESSION['acces'] != 'update' && $_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "contrib/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$table = new DefautTable($pdo);
[$defauts, $pagination] = $table->findPaginated();

$link = $router->url('contrib_defauts');
?>

<h1 class="mb-3">Liste des defauts</h1>

<div class="row">
    <?php foreach($defauts as $defaut): ?>
    <div class="col-md-12">
        <?php require 'contrib_card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>
