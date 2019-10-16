<?php
use App\Connection;
use App\Table\DefautTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\DefautValidator;
use App\ObjectHelper;

$pdo = Connection::getPDO();
$defautTable = new DefautTable($pdo);
$defaut = $defautTable->find($params['id']);
$success = false;
$errors = [];

if (!empty($_POST)){
    Validator::lang('fr');
    $v = new DefautValidator($_POST);
    ObjectHelper::hydrate($defaut, $_POST, ['lieu', 'service', 'nature', 'date_fin']);
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
    L'article n'a pas pu être modifié, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Editer le defaut <?= $params['id'] ?></h1>

<form action="" method="POST">
    <?= $form->input('lieu', 'Lieu'); ?>
    <?= $form->input('service', 'Service'); ?>
    <?= $form->textarea('nature', 'Nature'); ?>
    <?= $form->input('date_fin', 'Date de fin'); ?>
    <button class="btn btn-primary">Modifier</button>
</form>