<?php

/* require 'vendor/autoload.php';

use App\Auth;
use App\App;

session_start();

$auth = App::getAuth();
$error = false;
/*
if($auth->user() !== null){
  header('Location: index.php');
  exit();
}
*/
//if (!empty($_POST)){
 // $user = $auth->login($_POST['username'], $_POST['password']);
  //if($user){
   // header('Location: index.php?login=1');
   // exit();
 // }
 // $error = true;
//}
$router->layout = "login/layouts/default";
?>
    <div class="container ">
        <div class="row ">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5 ">
            <div class="card-body">
                <h5 class="card-title text-center">Connexion</h5>

                <form class="form-signin" action="" method="post">
                <div class="form-label-group">
                    <input type="text" name="username" id="inputUser" class="form-control" placeholder="Nom d'utilisateur" maxlength="30" required autofocus>
                    <label for="inputUser">Nom d'utilisateur</label>
                </div>
                <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de passe" minlength="4" required>
                    <label for="inputPassword">Mot de passe</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block text-uppercase btn-connexion" type="submit" name="valider">Connexion</button>
                <hr class="my-4">
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
