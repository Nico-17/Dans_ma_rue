<?php
use App\Connection;
use App\Auth;
use App\Table\UtilisateurTable;

Auth::check();

$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$table = new UtilisateurTable($pdo);
$table->delete($params['id']);
header('Location: ' . $router->url('admin_utilisateurs') . '?delete=1');
?>
