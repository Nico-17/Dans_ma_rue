<?php
use App\Connection;
use App\Table\DefautTable;

$router->layout = "read/layouts/home_default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
?>

