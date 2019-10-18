<?php
use App\Connection;
use App\Auth;
use App\Table\DefautTable;

Auth::check();

$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$table = new DefautTable($pdo);
$table->delete($params['id']);
header('Location: ' . $router->url('admin_defauts') . '?delete=1');
?>
