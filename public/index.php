<?php
require '../vendor/autoload.php';

//define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

define('UPLOAD_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'uploads');

$router = new App\Router(dirname(__DIR__) . '/views');
$router
                    //Ecran de connexion
    ->match('/login', 'auth/login', 'login')
    ->post('/logout', 'auth/logout', 'logout' )

                    
                    //Utilisateur
    //Mentions légales
    ->get('/mentions-legales', 'read/cgu', 'mentions_legales')                
    //Accueil
    ->get('/', 'read/index', 'accueil')
    //Defaut
    ->get('/defaut', 'read/defauts/read_defaut', 'defaut')
    //Service
    ->get('/service', 'read/services/read_services', 'service')

                    //Contributeur
    //Mentions légales
    ->get('/contrib/mentions-legales', 'contrib/cgu', 'contrib_mentions_legales')   
    //Accueil
    ->get('/contrib', 'contrib/index', 'accueil_contrib')
    //Defaut
    ->get('/contrib/defaut', 'contrib/defauts/contrib_defaut', 'contrib_defauts')
    ->match('/contrib/defaut/[i:id]', 'contrib/defauts/edit', 'contrib_defaut')
    //Service
    ->get('/contrib/service', 'contrib/services/contrib_services', 'contrib_services')

                    //Editeur
    //Mentions légales
    ->get('/edit/mentions-legales', 'edit/cgu', 'edit_mentions_legales')   
    //Accueil
    ->get('/edit', 'edit/index', 'accueil_edit')
    //Defaut
    ->get('/edit/defaut', 'edit/defauts/edit_defaut', 'edit_defauts')
    ->match('/edit/defaut/[i:id]', 'edit/defauts/edit', 'edit_defaut')
    ->post('/edit/defaut/[i:id]/delete', 'edit/defauts/delete', 'edit_defaut_delete')
    ->match('/edit/defaut/new', 'edit/defauts/new', 'edit_defaut_new')
    //Service
    ->get('/edit/service', 'edit/services/edit_services', 'edit_services')

                    //Administrateur
    //Mentions légales
    ->get('/admin/mentions-legales', 'admin/cgu', 'admin_mentions_legales')   
     //Accueil
    ->get('/admin', 'admin/index', 'accueil_admin') 
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


