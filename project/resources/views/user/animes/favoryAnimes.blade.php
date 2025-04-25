<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>
    @vite(['resources/js/app.js']) <!-- Intégration Vite -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/build/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/build/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
   


    </style>
</head>
<body>


    <!-- Header Section Begin -->
    <header class="header">
  <div class="containerr">
    <div class="row">
      <div class="col-lg-1">
        <div class="header__logo">
          <a href="./index.html">
            <img loading="lazy" src="img/logo.png" alt="">
          </a>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="header__nav">
          <!-- Ajout de l'icône du menu mobile -->
          <span class="mobile-menu-icon" id="mobileMenuIcon">☰</span>

          <nav class="header__menu mobile-menu" id="mobileMenu">
            <ul>
              <li><a href="{{ Route('home') }}">Homepage</a></li>
              <li><a href="{{ Route('animes') }}">Animes</a></li>
              <li><a href="{{ Route('films') }}">Films</a></li>
              <li>
                <a href="{{Route("categorie")}}">Categories<span class="arrow_carrot-down"></span></a>
                <ul class="dropdown">
                  <li><a href="{{Route("categorie")}}">Categories</a></li>
                  <li><a href="./anime-details.html">Anime Details</a></li>
                  <li><a href="./anime-watching.html">Anime Watching</a></li>
                  <li><a href="{{ Route("registerForm") }}">Sign Up</a></li>
                  <li><a href="{{ Route("loginForm") }}">Login</a></li>
                </ul>
              </li>
              <li><a href="./blog.html">Our Blog</a></li>
              <li><a href="#">Contacts</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="col-lg-12 header__right">
          
            <a href="#" class="search-switch"><span class="icon_search"></span></a>
          <a href="{{ Route('loginForm') }}"><span class="icon_profile"></span></a>
          <a href="" title="Ma watchlist">
            <i class="bi bi-bookmark" style="font-size: 20px;"></i>
          </a>
          <a href="{{ route('logOut') }}" title="Se déconnecter" class="text-danger">
            <i class="bi bi-box-arrow-right" style="font-size: 20px;"></i>
          </a>
          
          
        </div>
        
      </div>
    </div>
    <div id="mobile-menu-wrap"></div>
  </div>
</header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="containerr">
            <div class="hero__slider">
                <div class="slide active">
                    <img src="/build/assets/img/anime/One-piece.png" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="/build/assets/img/slide.avif" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="/build/assets/img/anime/TheBeginningAfterTheEnd.png" alt="Slide 3">
                </div>
                <button class="arrow arrow-left">❮</button>
                <button class="arrow arrow-right">❯</button>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
<section class="favorrites-section">
  <div class="containerr">
    <h2 class="sectionn-title">Mes Animes Favoris</h2>
    
    <div class="favoritees-grid">
      <!-- Anime Card 1 -->
      <div class="animee-caard">
        <div class="animee-caard-img">
          <img src="/build/assets/img/anime/anne.jpg" alt="Demon Slayer">
          <div class="overlayy">
            <button class="plaay-btn"><i class="fas fa-play"></i></button>
          </div>
          <span class="raating">9.2</span>
          <button class="favoritte-btn active"><i class="fas fa-heart"></i></button>
        </div>
        <div class="animee-caard-content">
          <h3>Demon Slayer</h3>
          <p class="animme-genre">Action, Fantastique</p>
          <p class="animee-description">Tanjiro Kamado devient chasseur de démons après le massacre de sa famille.</p>
        </div>
      </div>
      
      
    </div>
  </div>
</section>
<script src="/build/assets/js/script.js"></script>
 

</body>
</html>