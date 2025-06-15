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

</head>

<body>
    <!-- Page Preloder -->


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

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container" id="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Derniere EPisodes</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>




                        <div class="row cardrow" id="row">
                            @foreach ($animes as $anime )
                            @php $saison = $anime->saisons()->orderByDesc('saisonNumber')->first()@endphp
                            @if ($saison)
                            @php $episode=$saison->episodes()->orderBy('episodeNumber',"desc")->first() @endphp


                            <div class="col-lg-2 col-md-4 col-sm-12">
                                <div class='product__item'>
                                    <div class='product__item__pic set-bg' data-setbg='/build/assets/img/anime/{{ $saison->posterLink }}'>
                                        <div class='view'><i class='fa fa-eye'></i> {{ $episode->counter }}</div>
                                        <!-- <div class='comment'><i class='fa fa-comments'></i> 11</div> -->
                                        <div class='ep'> episode {{ $episode->episodeNumber }}</div>
                                        <div class='type'>{{ $anime->type }}</div>
                                        <div class='state'>{{ $saison->status }}</div>
                                    </div>
                                    <div class='product__item__text'>
                                        <ul>
                                            @foreach ($anime->categories as $category)

                                            <li>{{$category->name}}</li>
                                            @endforeach
                                        </ul>


                                        <h5><a href='{{ Route("counter",[$episode,$saison]) }}'>{{ $saison->titre }}</a></h5>

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            <!-- ============================== -->
                            <!-- ============================== -->
                            <!-- ============================== -->
                            <!-- ============================== -->
                            <!-- ============================== -->
                        </div>



                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">

                            </div>
                        </div>
                        <div class="row">


                            @foreach ($resultats as $resultat)



                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg='/build/assets/img/anime/{{ $resultat["saison"]->posterLink }}'>
                                        <!-- <div class="ep">18 / 18</div> -->
                                        <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                        <div class="view"><i class="fa fa-eye"></i> {{ $resultat["somme_counter"] }}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>

                                        <h5><a href="#">{{ $resultat["saison"]->titre;}}</a></h5>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{ route("allEpisodes") }}" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row cardrow">

                            @foreach ( $lastAnimes as $lastAnime )

                            <div class="col-lg-2 col-md-4 col-sm-12">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg='/build/assets/img/anime/{{ $lastAnime->posterLink }}'>
                                        <!-- <div class="ep">18 / 18</div> -->
                                        <!-- <div class="comment"><i class="fa fa-comments"></i> 11</div> -->
                                        <!-- <div class="view"><i class="fa fa-eye"></i> 9141</div> -->
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">{{ $lastAnime->titre }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>



        </div>


    </section>
    <!-- Product Section End -->

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
            <form class="search-model-form" action="{{ route("search") }}" method="post">
                @csrf
                <input type="text" id="search-input" name="search" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="/build/assets/js/script.js"></script>
    <script src="/build/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/build/assets/js/bootstrap.min.js"></script>
    <script src="/build/assets/js/player.js"></script>
    <script src="/build/assets/js/jquery.nice-select.min.js"></script>
    <script src="/build/assets/js/mixitup.min.js"></script>
    <script src="/build/assets/js/jquery.slicknav.js"></script>
    <script src="/build/assets/js/owl.carousel.min.js"></script>
    <script src="/build/assets/js/main.js"></script>
    <script>
        // JavaScript pour afficher/masquer le menu mobile
        document.getElementById("mobileMenuIcon").addEventListener("click", function() {
            const menu = document.getElementById("mobileMenu");
            menu.classList.toggle("active");
        });
    </script>

</body>

</html>