<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- intégration css -->
    <link rel="stylesheet" href="css/style.css">

    <title>
      <?php if (isset($title)): ?>
        <?= $title ?>
      <?php else : ?>
        Balade Urbaine
      <?php endif ?>
    </title>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white ml-3">

<img src="images/logo_la_rochelle.svg" alt="" class="mr-5" class="pl-5">

  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/index.php'): ?> active <?php endif; ?>" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/declarer_defaut.php'): ?> active <?php endif; ?>" href="declarer_defaut.php">Déclarer un défaut</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/administrer.php'): ?> active <?php endif; ?>" href="administrer.php">Administrer un defaut</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/utilisateurs.php'): ?> active <?php endif; ?>" href="utilisateurs.php">utilisateurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/etats.php'): ?> active <?php endif; ?>" href="etats.php">Etats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_SERVER['SCRIPT_NAME'] === '/services.php'): ?> active <?php endif; ?>" href="services.php">Services</a>
      </li>
    </ul>
    <span class="navbar-text">
    Déconnexion
    </span>
  </div>
</nav>
    <!-- Fin Navbar -->
    
<p class="font-weight-bold ml-3">Dans ma rue</p>
<hr>

</head>
<body>
    
</body>
</html>