<?php
use App\Connection;
use App\Table\UtilisateurTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\UtilisateurValidator;
use App\ObjectHelper;
use App\Auth;

Auth::check();

$pdo = Connection::getPDO();
$userTable = new UtilisateurTable($pdo);
$user = $userTable->find($params['id']);
$success = false;
$errors = [];
$bouton = 'Modifier';

if (!empty($_POST)){
    Validator::lang('fr');
    $v = new UtilisateurValidator($_POST);
    ObjectHelper::hydrate($user, $_POST, ['prenom', 'nom', 'role', 'acces', 'username', 'password']);
    if ($v->validate()){
        $userTable->update($user);
        $success = true;
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($user, $errors);
?>

<?php if($success): ?>
<div class="alert alert-success">L'utilisateur a bien été modifié</div>
<?php endif ?>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    L'utilisateur n'a pas pu être modifié, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Editer l'utilisateur #<?= $params['id'] ?></h1>

<?php require('_form.php') ?>