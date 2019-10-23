<?php
use App\Connection;
use App\Auth;
use App\Table\DefautTable;
use App\Attachment\DefautAttachment;

Auth::check();

if($_SESSION['acces'] != 'edit' && $_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$table = new DefautTable($pdo);
$defaut = $table->find($params['id']);
DefautAttachment::detach($defaut);
$table->delete($params['id']);
header('Location: ' . $router->url('edit_defauts') . '?delete=1');
?>
