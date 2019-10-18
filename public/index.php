<?php
require '../vendor/autoload.php';

//define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new App\Router(dirname(__DIR__) . '/views');
$router
                    //Utilisateur
    //Accueil
    ->get('/', 'read/index', 'accueil')
    //Defaut
    ->get('/defaut', 'read/list_defaut', 'defaut')
    //Service
    ->get('/service', 'read/list_service', 'service')
                    //Administrateur
     //Accueil
    ->get('/', 'admin/index', 'accueil_admin') 
    //Defaut
    ->get('/admin/defaut', 'admin/defauts/admin_defaut', 'admin_defauts')
    ->match('/admin/defaut/[i:id]', 'admin/defauts/edit', 'admin_defaut')
    ->post('/admin/defaut/[i:id]/delete', 'admin/defauts/delete', 'admin_defaut_delete')
    ->match('/admin/defaut/new', 'admin/defauts/new', 'admin_defaut_new')
    //Service
    ->get('/admin/service', 'admin/services/admin_services', 'admin_services')
    ->match('/admin/service/[:services]', 'admin/services/edit', 'admin_service')
    ->post('/admin/service/[:services]/delete', 'admin/services/delete', 'admin_service_delete')
    ->match('/admin/services/new', 'admin/services/new', 'admin_service_new')
    //Utilisateur
    ->get('/admin/utilisateur', 'admin/utilisateurs/admin_utilisateur', 'admin_utilisateurs')
    ->match('/admin/utilisateur/[i:id]', 'admin/utilisateurs/edit', 'admin_utilisateur')
    ->post('/admin/utilisateur/[i:id]/delete', 'admin/utilisateurs/delete', 'admin_utilisateur_delete')
    ->match('/admin/utilisateur/new', 'admin/utilisateurs/new', 'admin_utilisateur_new')
    ->run(); 


