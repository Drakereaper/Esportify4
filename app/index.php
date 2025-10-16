<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/assets/css/header.css">
    <title>Accueil</title>
</head>
    <?php
        require('./partials/head.php');
        require('./partials/navbar.php');
    ?>
<body>
    <div id="divtitre" class="container-lg">
    <h1 id="titrehistory" class="text-center text-uppercase">Histoire</h1>
    <p class="fs-5 mt-5 text-center">Créée en 2021, Esportify est une startup française née de la passion pour l’esport et la compétition en ligne.<br> Après avoir organisé nos premiers tournois avec des outils simples, nous avons rapidement rassemblé une communauté de joueurs motivés et compétitifs.<br> Aujourd’hui, nous faisons évoluer cette expèrience avec une plateforme moderne et intuitive, qui permet aux joueurs de s’inscrire facilement aux tournois, de participer à des compétitions, de suivre leurs résultats et de progresser dans un univers 100% e-sport.</p>
</div>
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner mt-5 w-50">
    <div class="carousel-item active">
      <img src="../assets/images/carousel/image1.jpg" class="d-block w-100" alt="image1">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/carousel/image2.jpg" class="d-block w-100" alt="image2">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/carousel/image3.jpg" class="d-block w-100" alt="image3">
    </div>
    <div class="carousel-item">
      <img src="../assets/images/carousel/image4.jpg" class="d-block w-100" alt="image4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
</html>