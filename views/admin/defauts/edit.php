<?php
use App\Connection;
use App\Table\DefautTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\DefautValidator;
use App\ObjectHelper;
use App\Auth;
use App\Model\Defaut;

Auth::check();

$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$defautTable = new DefautTable($pdo);
$defaut = $defautTable->find($params['id']);
$success = false;
$errors = [];
$bouton = 'Modifier';

if (!empty($_POST)){
    Validator::lang('fr');
    $v = new DefautValidator($_POST);
    ObjectHelper::hydrate($defaut, $_POST, ['lieu', 'services', 'nature', 'date_fin', 'X', 'Y', 'etat']);
    if ($v->validate()){
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