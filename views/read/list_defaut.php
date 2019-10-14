<?php
use App\Connection;
use App\Model\Defaut;
use App\URL;

$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$currentPage = URL::getInt('page', 1);

if ($currentPage <= 0){
    throw new Exception('Numéro de page invalide');
}
$count = (int)$pdo->query("SELECT COUNT(id) FROM defaut")->fetch(PDO::FETCH_NUM)[0];
$perPage = 15;
$pages = ceil($count / $perPage);
if ($currentPage > $pages){
    throw new Exception('Cette page n\'existe pas');
}
$offset = $perPage * ($currentPage - 1);
$query = $pdo->query("SELECT * FROM defaut ORDER BY date_observation DESC LIMIT $perPage OFFSET $offset ");
$defauts = $query->fetchAll(PDO::FETCH_CLASS, Defaut::class);
?>


<h1>Liste des defauts</h1>

<div class="row">
    <?php foreach($defauts as $defaut): ?>
    <div class="col-md-12">
        <?php require 'card.php' ?>
    </div>
    <?php endforeach ?>
</div>

<div class="d-flex justify-content-between my-4">
    <?php if ($currentPage > 1): ?>
        <?php
        $link = $router->url('defaut');
        if ($currentPage > 2) $link .= '?page=' . ($currentPage - 1);
        ?>
        <a href="<?= $link ?>" class="btn btn-primary"> &laquo Page précédente </a>
    <?php endif ?>
    <?php if ($currentPage < $pages): ?>
        <a href="<?= $router->url('defaut') ?>?page=<?= $currentPage + 1 ?>" class="btn btn-primary ml-auto"> Page suivante &raquo </a>
    <?php endif ?>
</div>
