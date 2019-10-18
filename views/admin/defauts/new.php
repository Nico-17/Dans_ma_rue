<?php
use App\Connection;
use App\Table\DefautTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\DefautValidator;
use App\ObjectHelper;
use App\Model\Defaut;
use App\Auth;

Auth::check();

$success = false;
$errors = [];
$defaut = new Defaut();
$bouton = 'Ajouter';

if (!empty($_POST)){ 
    $pdo = Connection::getPDO();
    $defautTable = new DefautTable($pdo);
    Validator::lang('fr');
    $v = new DefautValidator($_POST);
    ObjectHelper::hydrate($defaut, $_POST, ['lieu', 'service', 'nature', 'date_fin']);
    if ($v->validate()){
        $defautTable->create($defaut);
        header('Location: ' . $router->url('admin_defauts'));
        exit();
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($defaut, $errors);
?>

<?php if($success): ?>
<div class="alert alert-success">Le défaut a bien été enregistrer</div>
<?php endif ?>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    Le défaut n'a pas pu être créer, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Ajouter un nouveau defaut</h1>

<?php require('_form.php') ?>