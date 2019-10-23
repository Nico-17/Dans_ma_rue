<?php
use App\Model\Utilisateur;
use App\HTML\Form;
use App\Connection;
use App\Table\UtilisateurTable;
use App\Table\Exception\NotFoundException;

$user = new Utilisateur();
$errors = [];

if (!empty($_POST)){
    $user->setUsername($_POST['username']);
    $errors['password'] = 'Identifiant ou mot de passe incorrect';
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $table = new UtilisateurTable(Connection::getPDO());
        try {
            $u = $table->findByUsername($_POST['username']);
            if(password_verify($_POST['password'], $u->getPassword()) === true) {
                if($u->getAcces() === 'admin'){
                    session_start();
                    $_SESSION['auth'] = $u->getId();
                    $_SESSION['acces'] = $u->getAcces();
                    header('Location: ' . $router->url('admin_defauts'));
                    exit();
                }
                if($u->getAcces() === 'edit'){
                    session_start();
                    $_SESSION['auth'] = $u->getId();
                    $_SESSION['acces'] = $u->getAcces();
                    header('Location: ' . $router->url('edit_defauts'));
                    exit();
                }
                if($u->getAcces() === 'read'){
                    session_start();
                    $_SESSION['auth'] = $u->getId();
                    $_SESSION['acces'] = $u->getAcces();
                    header('Location: ' . $router->url('accueil'));
                    exit();
                }
                if($u->getAcces() === 'update'){
                    session_start();
                    $_SESSION['auth'] = $u->getId();
                    $_SESSION['acces'] = $u->getAcces();
                    header('Location: ' . $router->url('contrib_defauts'));
                    exit();
                }
            }
        }catch (NotFoundException $e) {}
    }
}
$router->layout = "auth/layouts/default";
$form = new Form($user, $errors);
?>
    <?php if(isset($_GET['forbidden'])): ?>
    <div class="alert alert-danger">
        Vous ne pouvez pas accéder à cette page
    </div>
    <?php endif ?>
    <form class="form-signin" action="<?= $router->url('login') ?>" method="post">
        <?= $form->input('username', 'Nom d\'utilisateur'); ?>
        <?= $form->input('password', 'Mot de passe'); ?>
        <button class="btn btn-lg btn-primary btn-block text-uppercase btn-connexion" type="submit" name="valider">Connexion</button>
        <hr class="my-4">
    </form>