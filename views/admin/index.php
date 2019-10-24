<?php
use App\Connection;
use App\Table\DefautTable;
use App\Auth;

Auth::check();

if($_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "admin/layouts/home_default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');

$table = new DefautTable($pdo);
[$defauts, $pagination] = $table->findPaginated();

?>
 
<div class="list d-none">
    <?php foreach($defauts as $defaut): ?>
        <?php require 'home_card.php' ?>
    <?php endforeach ?>
</div>

