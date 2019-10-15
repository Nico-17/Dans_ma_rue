<?php
use App\Connection;
//use App\Table\DefautTable;

//$pdo = Connection::getPDO();
//$table = new DefautTable($pdo);
//$table->delete($params['id']);
//header('Location: ' . $router->url('admin_defauts') . '?delete=1');

$pdo = Connection::getPDO;
if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $suppr_id = htmlspecialchars($_GET['id']);
   $suppr = $bdd->prepare('DELETE FROM defaut WHERE id = ?');
   $suppr->execute(array($suppr_id));
   header('Location: ' . $router->url('admin_defauts') . '?delete=1');
}

?> 

 <h1>Suppression de <?= $params['id'] ?></h1>