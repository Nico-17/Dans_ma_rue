<?php
require '../vendor/autoload.php';

define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

if(isset($_GET['page']) && $_GET['page'] === '1') {
    //réecrire l'url sans le paramètre ?page
    $uri = explode('?', $_SERVER['REQUEST_URI'] )(0);
    $get = $_GET;
    unset($get['page']);
    $query = http_build_query($get);
    if(!empty($query)){
        $uri = $uri . '?' . $query;
    }
    header('Location: ' . $uri);
    http_response_code(301);
    exit();
}

$router = new App\Router(dirname(__DIR__) . '/views');
$router
    ->get('/defaut', 'read/list_defaut', 'defaut')
    ->get('/defaut/etat', 'read/show', 'etat')
    ->run();


