<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
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
                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-12 header__right">

                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="{{ Route('loginForm') }}"><span class="icon_profile"></span></a>
                        <a href="{{ Route("favoryAnimes") }}" title="Ma watchlist">
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


    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">

                        <div class="anime__details__pic set-bg" loading="lazy" data-setbg="/build/assets/img/anime/{{ $film->posterLink }}">
                            <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                            <!-- <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $film->titre }}</h3>
                               
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p>{{ $film->description }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span>{{ $film->type}}</li>
                                            <li><span>Date aired:</span> Oct 02, 2019 to ?</li>
                                            <li><span>Status:</span> {{ $film->status }}</li>
                                           <li><span>Genre:</span>
                                                @foreach ($film->categories as $categorie )
                                                {{ $categorie->name}}

                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            
                                            <li><span>Duration:</span> {{ $film->duration }}</li>
                                           
                                            <li><span>Views:</span> {{ $film->counter }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>
                                <a href="{{ Route("film",$film) }}" class="watch-btn"><span>Watch Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                       


                    </div>
                  
                </div>
                <div>
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>films</h5>
                        </div>

                        <div class="row g-3">
                            
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                                <div class="product__sidebar__view__item set-bg" loading="lazy" data-setbg="/build/assets/img/anime/{{ $film->posterLink }}">
                                    <!-- <div class="ep">18 / ?</div> -->
                                    <div class="view"><i class="fa fa-eye"></i> {{ $film->counter }}</div>
                                    <h5><a href="{{ Route('film', $film) }}">{{ $film->titre }}</a></h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Anime Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img loading="lazy" src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="/build/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/build/assets/js/bootstrap.min.js"></script>
    <script src="/build/assets/js/player.js"></script>
    <script src="/build/assets/js/jquery.nice-select.min.js"></script>
    <script src="/build/assets/js/mixitup.min.js"></script>
    <script src="/build/assets/js/jquery.slicknav.js"></script>
    <script src="/build/assets/js/owl.carousel.min.js"></script>
    <script src="/build/assets/js/main.js"></script>

</body>

</html>