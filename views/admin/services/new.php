<?php
use App\Connection;
use App\Table\ServiceTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\ServiceValidator;
use App\ObjectHelper;
use App\Model\Service;
use App\Auth;

Auth::check();

$success = false;
$errors = [];
$services = new Service();
$bouton = 'Ajouter';

if (!empty($_POST)){ 
    $pdo = Connection::getPDO();
    $pdo->exec('SET NAMES utf8');
    $serviceTable = new ServiceTable($pdo);
    Validator::lang('fr');
    $v = new ServiceValidator($_POST);
    ObjectHelper::hydrate($services, $_POST, ['services', 'contact', 'tel', 'courriel']);
    if ($v->validate()){
        $serviceTable->create($services);
        header('Location: ' . $router->url('admin_services'));
        exit();
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($services, $errors);
?>

<?php if($success): ?>
<div class="alert alert-success">Le service a bien été enregistrer</div>
<?php endif ?>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    Le service n'a pas pu être créer, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Ajouter un nouveau service</h1>

<?php require('_form.php') ?>