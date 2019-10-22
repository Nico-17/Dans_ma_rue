<?php
use App\Connection;
use App\Auth;
use App\Table\ServiceTable;

Auth::check();

$router->layout = "admin/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$table = new ServiceTable($pdo);
$table->delete($params['services']);
header('Location: ' . $router->url('admin_services') . '?delete=1');
?>
