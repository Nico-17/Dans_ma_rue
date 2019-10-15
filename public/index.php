<?php
require '../vendor/autoload.php';

define('DEBUG_TIME', microtime(true));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new App\Router(dirname(__DIR__) . '/views');
$router
    ->get('/defaut', 'read/list_defaut', 'defaut')
    ->get('/admin/defaut', 'admin/defauts/admin_defaut', 'admin_defauts')
    ->get('/admin/defaut/[i:id]', 'admin/defauts/edit', 'admin_defaut')
    ->get('/admin/defaut/[i:id]/delete', 'admin/defauts/delete', 'admin_defaut_delete')
    ->get('/admin/defaut/new', 'admin/defauts/new', 'admin_defaut_new')
    ->run();


