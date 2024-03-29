<!DOCTYPE html>
<html lang="fr" class= "h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balade Urbaine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class=" h-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a href="<?= $router->url('accueil_contrib') ?>" class="navbar-brand d-flex flex-column"><img src="/images/Logo_la_rochelle.svg" alt="Logo de la ville de La Rochelle en Charente-Maritime" width="60px" height="60px" class="ml-5">BALADE URBAINE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= $router->url('accueil_contrib') ?>" class="nav-link navcolor">Accueil</a></li>
                <li class="nav-item"><a href="<?= $router->url('contrib_defauts') ?>" class="nav-link navcolor">Defauts</a></li>
                <li class="nav-item"><a href="<?= $router->url('contrib_services') ?>" class="nav-link navcolor">Services</a></li>
                <li class="nav-item">
                    <form action="<?= $router->url('logout') ?>" method="post" class="d-inline form-logout">
                        <button type="submit" class="nav-link bg-transparent border-0 logout">Se déconnecter</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 ">
        <?= $content ?>       
    </div>
    <footer class="d-flex justify-content-center h-auto mt-5" >
        <a href="https://www.sylvan-formations.com/" target="_blank"><img src="/images/logo_sylvan.png" alt="Logo Sylvan Formations" class="sylvan-logo p-4"></a> 
        <a href="<?= $router->url('contrib_mentions_legales')?>" class="text-dark align-self-center">Mentions légales</a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
