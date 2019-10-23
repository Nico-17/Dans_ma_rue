<?php
use App\Connection;
use App\Table\DefautTable;
use App\Table\ServiceTable;
use App\Table\EtatTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\DefautValidator;
use App\ObjectHelper;
use App\Auth;
use App\Model\Defaut;
use App\Attachment\DefautAttachment;

Auth::check();

if($_SESSION['acces'] != 'edit' && $_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "edit/layouts/default";
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$defautTable = new DefautTable($pdo);
$etatTable = new EtatTable($pdo);
$etats = $etatTable->listEtat();
$serviceTable = new ServiceTable($pdo);
$services = $serviceTable->list();
$defaut = $defautTable->find($params['id']);
$success = false;
$errors = [];
$bouton = 'Modifier';

if (!empty($_POST)){
    Validator::lang('fr');
    $data = array_merge($_POST, $_FILES);
    $v = new DefautValidator($data, $services, $etats);
    ObjectHelper::hydrate($defaut, $data, ['lieu', 'services', 'nature', 'date_fin', 'X', 'Y', 'etat', 'photo']);
    if ($v->validate()){
        DefautAttachment::upload($defaut);
        $defautTable->update($defaut);
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($defaut, $errors);
?>

<?php if($success): ?>
<div class="alert alert-success">Le défaut a bien été modifié</div>
<?php endif ?>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    Le défaut n'a pas pu être modifié, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Editer le defaut <?= $params['id'] ?></h1>

<?php require('_form.php') ?>