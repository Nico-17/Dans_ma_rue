<?php
use App\Connection;
use App\Table\DefautTable;
use App\Auth;

Auth::check();

if($_SESSION['acces'] != 'read' && $_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "read/layouts/home_default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
?>

