<!DOCTYPE html>
<html lang="zxx">

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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

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
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <a href="#">Romance</a>
                        <span>Fate Stay Night: Unlimited Blade</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player">
                        <video id="player" playsinline controls data-poster="https://img.youtube.com/vi/gY5nDXOtv_o/default.jpg">
                            <source src="{{ $film->videoLink }}" type="video/mp4" />

                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video>
                    </div>
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>List Name</h5>
                        </div>


                        <a href="{{ Route("film",[$film]) }}"></a>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>

                        @foreach($film->users as $user)

                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-6.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>{{ $user->name }} - <span>{{ $user->pivot->created_at->format('d-m-y H:i:s') }}</span></h6>
                                <p>{{ $user->pivot->comment }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <form action="{{ Route('addCommentFilm',[$film]) }}" method="POST">
                        @csrf
                            <textarea name="comment" placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
    <script src="./build/assets/js/script.js"></script>
    <script src="./build/assets/js/jquery-3.3.1.min.js"></script>
    <script src="./build/assets/js/bootstrap.min.js"></script>
    <script src="./build/assets/js/player.js"></script>
    <script src="./build/assets/js/jquery.nice-select.min.js"></script>
    <script src="./build/assets/js/mixitup.min.js"></script>
    <script src="./build/assets/js/jquery.slicknav.js"></script>
    <script src="./build/assets/js/owl.carousel.min.js"></script>
    <script src="./build/assets/js/main.js"></script>

</body>

</html>