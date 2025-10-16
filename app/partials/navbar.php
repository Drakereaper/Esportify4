<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div id="titres" class="d-flex flex-column align-items-end mb-0" style="line-height: 1">
      <a id="titre" class="mb-0 fs-1 fw-bold" href="./index.php">ESPORTIFY</a>
      <a id="titre2" class="mt-0 fs-4 fw-bold" href="./index.php">France e-sport</a>
    </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
      <ul class="navbar-nav d-flex gap-lg-5 gap-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./event.php">Evènements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <div class="d-flex gap-2">
        <button href="" id="inscription" type="button" class="btn btn-sm md-2">Inscription</button>
        <button href="" id="connexion" type="button" class="btn btn-sm">Connexion</button>
      </div>
  </div>
</nav>
</body>
</html>