<?php

if($_SESSION['acces'] != 'admin'){
    session_destroy();
    header('Location: ' . $router->url('login'));
}

?>