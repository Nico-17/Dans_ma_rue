<!DOCTYPE html>
<html lang="fr" class= "h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dans ma rue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="h-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a href="<?= $router->url('accueil') ?>" class="navbar-brand">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= $router->url('accueil') ?>" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="<?= $router->url('defaut') ?>" class="nav-link">Defauts</a></li>
                <li class="nav-item"><a href="<?= $router->url('service') ?>" class="nav-link">Services</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <?= $content ?>       
    </div>
    <footer class="bg-light py-4 footer mt-auto">
        <div class="container">
            <?php if (defined('DEBUG_TIME')): ?>
            Page générée en <?= round(1000 * (microtime(true) - DEBUG_TIME)) ?>ms
            <?php endif ?>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
