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
        <button data-bs-toggle="modal" data-bs-target="#registerModal" id="inscription" type="button" class="btn btn-sm md-2">Inscription</button>
        <button href="" id="connexion" type="button" class="btn btn-sm">Connexion</button>
      </div>
  </div>
</nav>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content esportify-modal">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5" id="registerModalLabel">Formulaire d'inscription</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form id="registerForm" class="text-light">
                <div class="mb-3">
                    <label class="form-label">Type d'utilisateur</label>
                    <select name="role" class="form-select select-esportify" required>
                        <option value="player">Joueur</option>
                        <option value="organizer">Organisateur</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control form-control-esportify" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pseudo</label>
                    <input type="text" class="form-control form-control-esportify" name="nickname" required minlength="3" maxlength="80">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" class="form-control form-control-esportify" name="password" required minlength="8">
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control form-control-esportify" name="password_confirm" required minlength="8">
                </div>
                <div id="registerMessage" class="mb-3"></div>
                <button type="submit" class="btn btn-esportify w-100 mt-2">S'inscrire</button>
            </form>
        </div>
        <div class="modal-footer border-0">
            <button type="button" class="btn btn-secondary-esportify" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
</body>
</html>