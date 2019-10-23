<?php
use App\Connection;
use App\Table\UtilisateurTable;
use App\Table\AccesTable;
use App\Validator;
use App\HTML\Form;
use App\Validators\UtilisateurValidator;
use App\ObjectHelper;
use App\Model\Utilisateur;
use App\Auth;

Auth::check();

if($_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

$router->layout = "admin/layouts/default";
$success = false;
$errors = [];
$user = new Utilisateur();
$pdo = Connection::getPDO();
$pdo->exec('SET NAMES utf8');
$accesTable = new AccesTable($pdo);
$access = $accesTable->listAcces();
$bouton = 'Ajouter';

if (!empty($_POST)){ 
    $userTable = new UtilisateurTable($pdo);
    Validator::lang('fr');
    $v = new UtilisateurValidator($_POST, $access);
    ObjectHelper::hydrate($user, $_POST, ['prenom', 'nom', 'role', 'acces', 'username', 'password']);
    if ($v->validate()){
        $userTable->create($user);
        header('Location: ' . $router->url('admin_utilisateurs'));
        exit();
    } else {
        $errors = $v->errors();
    }
}
$form = new Form($user, $errors);
?>

<?php if($success): ?>
<div class="alert alert-success">L'utilisateur' a bien été enregistrer</div>
<?php endif ?>

<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    L'utilisateur n'a pas pu être créer, merci de corriger vos erreurs
</div>
<?php endif ?>

<h1>Ajouter un nouvel utilisateur</h1>

<?php require('_form.php') ?>