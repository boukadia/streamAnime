<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>An</title>
    @vite(['resources/js/app.js']) <!-- Intégration Vite -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./build/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./build/assets/css/style.css" type="text/css">
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

    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container" id="container">
            <div class="row">
                <div class="">
                    <div class="trending__product">



                        <div class="row" id="row">
                            @foreach ($animes as $anime )

                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class='product__item'>
                                    <div class='product__item__pic set-bg' data-setbg='{{ $anime->posterLink }}'>
                                        <div class='ep'></div>
                                        <div class='comment'><i class='fa fa-comments'></i> 11</div>
                                        <div class='view'><i class='fa fa-eye'></i> 9141</div>
                                    </div>
                                    <div class='product__item__text'>
                                        <ul>
                                            @foreach ($anime->categories as $category)

                                            <li>{{$category->name}}</li>
                                            @endforeach
                                        </ul>
                                        <h5><a href='{{ Route("animeDetails",$anime) }}'>{{ $anime->titre }}</a></h5>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- ============================== -->
                            <!-- ============================== -->
                            <!-- ============================== -->
                            <!-- ============================== -->
                            <!-- ============================== -->
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
    <script src="./build/assets/js/script.js"></script>
    <script src="./build/assets/js/jquery-3.3.1.min.js"></script>
    <script src="./build/assets/js/bootstrap.min.js"></script>
    <script src="./build/assets/js/player.js"></script>
    <script src="./build/assets/js/jquery.nice-select.min.js"></script>
    <script src="./build/assets/js/mixitup.min.js"></script>
    <script src="./build/assets/js/jquery.slicknav.js"></script>
    <script src="./build/assets/js/owl.carousel.min.js"></script>
    <script src="./build/assets/js/main.js"></script>
    <script>
   // JavaScript pour afficher/masquer le menu mobile
   document.getElementById("mobileMenuIcon").addEventListener("click", function () {
    const menu = document.getElementById("mobileMenu");
    menu.classList.toggle("active");
  });
</script>

</body>

</html>