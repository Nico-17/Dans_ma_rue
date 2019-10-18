<?php
use App\Connection;
use App\Auth;
use App\Table\ServiceTable;

Auth::check();

$pdo = Connection::getPDO();
$table = new ServiceTable($pdo);
$table->delete($params['services']);
header('Location: ' . $router->url('admin_services') . '?delete=1');
?>
