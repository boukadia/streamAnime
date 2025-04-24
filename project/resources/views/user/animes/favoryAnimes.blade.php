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
        /* Section Favoris */
.favorites-section {
  padding: 4rem 0;
  background-color: #0d1117;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1.5rem;
}

.section-title {
  font-size: 2rem;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 2rem;
  position: relative;
  padding-left: 1rem;
  border-left: 4px solid #ff5e00;
}

.favorites-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 25px;
}

/* Anime Card */
.anime-card {
  background-color: #161b22;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.anime-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.4);
}

.anime-card-img {
  position: relative;
  height: 0;
  padding-bottom: 140%;
  overflow: hidden;
}

.anime-card-img img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.anime-card:hover .anime-card-img img {
  transform: scale(1.05);
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.7));
  opacity: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: opacity 0.3s ease;
}

.anime-card:hover .overlay {
  opacity: 1;
}

.play-btn {
  background-color: rgba(255, 94, 0, 0.9);
  color: white;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.play-btn:hover {
  background-color: #ff5e00;
  transform: scale(1.1);
}

.rating {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #ffcb00;
  padding: 3px 8px;
  border-radius: 5px;
  font-weight: 600;
  font-size: 0.9rem;
}

.favorite-btn {
  position: absolute;
  top: 10px;
  right: 10px;
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.favorite-btn.active {
  color: #ff5e00;
}

.favorite-btn:hover {
  background-color: rgba(0, 0, 0, 0.9);
}

.anime-card-content {
  padding: 15px;
}

.anime-card-content h3 {
  color: #ffffff;
  font-size: 1.1rem;
  margin: 0 0 8px 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.anime-genre {
  color: #ff5e00;
  font-size: 0.85rem;
  margin: 0 0 10px 0;
}

.anime-description {
  color: #a8b2c0;
  font-size: 0.9rem;
  margin: 0;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
  line-height: 1.4;
}

/* Responsive */
@media (max-width: 768px) {
  .favorites-grid {
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 15px;
  }
  
  .section-title {
    font-size: 1.7rem;
  }
}

@media (max-width: 480px) {
  .favorites-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
  
  .anime-card-content h3 {
    font-size: 0.95rem;
  }
  
  .anime-description {
    font-size: 0.85rem;
    -webkit-line-clamp: 2;
  }
  
  .section-title {
    font-size: 1.5rem;
  }
}
    </style>
</head>
<body>


    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img loading="lazy" src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class=""><a href="{{ Route('home') }}">Homepage</a></li>
                                <li class=""><a href="{{ Route('animes') }}">Animes</a></li>
                                <li class=""><a href="{{ Route('films') }}">Films</a></li>
                                <li><a href="{{Route("categorie")}}">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="{{Route("categorie")}}">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="{{ Route("registerForm") }}">Sig Up</a></li>
                                        <li><a href="{{ Route("loginForm") }}">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
               <div class="col-lg-2">
    <div class="header__right">
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
        <div class="container">
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
<section class="favorites-section">
  <div class="container">
    <h2 class="section-title">Mes Animes Favoris</h2>
    
    <div class="favorites-grid">
      <!-- Anime Card 1 -->
      <div class="anime-card">
        <div class="anime-card-img">
          <img src="assets/images/anime1.jpg" alt="Demon Slayer">
          <div class="overlay">
            <button class="play-btn"><i class="fas fa-play"></i></button>
          </div>
          <span class="rating">9.2</span>
          <button class="favorite-btn active"><i class="fas fa-heart"></i></button>
        </div>
        <div class="anime-card-content">
          <h3>Demon Slayer</h3>
          <p class="anime-genre">Action, Fantastique</p>
          <p class="anime-description">Tanjiro Kamado devient chasseur de démons après le massacre de sa famille.</p>
        </div>
      </div>
      
      <!-- Anime Card 2 -->
      <div class="anime-card">
        <div class="anime-card-img">
          <img src="assets/images/anime2.jpg" alt="Attack on Titan">
          <div class="overlay">
            <button class="play-btn"><i class="fas fa-play"></i></button>
          </div>
          <span class="rating">9.5</span>
          <button class="favorite-btn active"><i class="fas fa-heart"></i></button>
        </div>
        <div class="anime-card-content">
          <h3>Attack on Titan</h3>
          <p class="anime-genre">Action, Drame, Fantaisie sombre</p>
          <p class="anime-description">L'humanité lutte pour sa survie face aux titans qui menacent son existence.</p>
        </div>
      </div>
      
      <!-- Anime Card 3 -->
      <div class="anime-card">
        <div class="anime-card-img">
          <img src="assets/images/anime3.jpg" alt="Jujutsu Kaisen">
          <div class="overlay">
            <button class="play-btn"><i class="fas fa-play"></i></button>
          </div>
          <span class="rating">9.0</span>
          <button class="favorite-btn active"><i class="fas fa-heart"></i></button>
        </div>
        <div class="anime-card-content">
          <h3>Jujutsu Kaisen</h3>
          <p class="anime-genre">Action, Surnaturel</p>
          <p class="anime-description">Yuji Itadori rejoint une école d'exorcistes après avoir ingéré un doigt maudit.</p>
        </div>
      </div>
      
      <!-- Anime Card 4 -->
      <div class="anime-card">
        <div class="anime-card-img">
          <img src="assets/images/anime4.jpg" alt="One Piece">
          <div class="overlay">
            <button class="play-btn"><i class="fas fa-play"></i></button>
          </div>
          <span class="rating">9.3</span>
          <button class="favorite-btn active"><i class="fas fa-heart"></i></button>
        </div>
        <div class="anime-card-content">
          <h3>One Piece</h3>
          <p class="anime-genre">Aventure, Action, Comédie</p>
          <p class="anime-description">Luffy et son équipage naviguent à la recherche du trésor légendaire, le One Piece.</p>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>