<!DOCTYPE html>
<html lang="fr" class= "h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dans ma rue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class=" h-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
        <a href="#" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="<?= $router->url('admin_defauts') ?>" class="nav-link">Defauts</a></li>
            <li class="nav-item"><a href="<?= $router->url('admin_services') ?>" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="<?= $router->url('admin_utilisateurs') ?>" class="nav-link">Utilisateurs</a></li>
        </ul>
    </nav>

    <div class="container mt-4 ">
        <?= $content ?>       
    </div>
    <footer class="bg-light py-4 footer mt-auto">
        <div class="container">
            <?php if (defined('DEBUG_TIME')): ?>
            Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME)) ?>ms
            <?php endif ?>
        </div>
    </footer>
</body>
</html>