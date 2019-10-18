<?php
use App\Connection;
use App\Table\ServiceTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\ServiceValidator;
use App\ObjectHelper;
use App\Auth;

Auth::check();

$pdo = Connection::getPDO();
$servicesTable = new ServiceTable($pdo);
$services = $servicesTable->find($params['services']);
$success = false;
$errors = [];
$bouton = 'Modifier';

if (!empty($_POST)){
    Validator::lang('fr');
    $v = new ServiceValidator($_POST);
    ObjectHelper::hydrate($services, $_POST, ['services', 'contact', 'tel', 'courriel']);
    if ($v->validate()){
        $servicesTable->update($services);
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($services, $errors);
?>

<?php if($success): ?>
<div class="alert alert-success">Le service a bien été modifié</div>
<?php endif ?>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    Le service n'a pas pu être modifié, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Editer le service</h1>

<?php require('_form.php') ?>