<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>
    <link rel="website icon" type ="png" href="/build/assets/img/logo1.svg">
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
</head>

<body>
    <!-- Page Preloder -->


    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/index.html">
                            <img loading="lazy" src="/build/assets/img/MBK.webp" alt="">
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
                                        <li><a href="/anime-details.html">Anime Details</a></li>
                                        <li><a href="/anime-watching.html">Anime Watching</a></li>
                                        <li><a href="/blog-details.html">Blog Details</a></li>
                                        <li><a href="{{ Route("registerForm") }}">Sig Up</a></li>
                                        <li><a href="{{ Route("loginForm") }}">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="/blog.html">Our Blog</a></li>
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

    <div class="anime-filter">
        <!-- MAIN SECTION -->
        <!-- <div class="main-section">
            <div class="container">
                <h3>نوع الأنمي [ Movie ]</h3>
            </div>
        </div> -->
        <!-- END MAIN SECTION -->

        <!-- FILTER SECTION -->
        <div class="second-section">
            <div class="container">
                <div class="anime-filter-options">
                    <ul>
                        <!-- Section Dropdown -->
                        <li>
                            <div class="dropdownn">
                                <button  onclick="hiddeen(event)" class="btn">النوع <span class="caret">▼</span></button>
                                <ul id="animeType" class="dropdown-menu hidden" >
                                   
                                    <li><a  href="{{Route("filtrageParType",["type"=>"TV"])}}">TV</a></li>
                                    <li><a  href="{{Route("filtrageParType",["type"=>"MOVIE"])}}">MOVIE</a></li>
                                    <li><a  href="{{Route("filtrageParType",["type"=>"OVA"])}}">OVA</a></li>
                                    <li><a  href="{{Route("filtrageParType",["type"=>"ONA"])}}">ONA</a></li>
                                    <li><a  href="{{Route("filtrageParType",["type"=>"SPECIAL"])}}">SPECIAL</a></li>

                                    

                                </ul>
                            </div>
                        </li>
                        <!-- Genre Dropdown -->
                        <li>
                            <div class="dropdownn">
                                <button onclick="hiddeen(event)" class="btn">تصنيف الأنمي <span class="caret">▼</span></button>
                                <ul id="animeCategories" class="dropdown-menu hidden" >
                                    @foreach ( $categories as $category )
                                    <li><a  href="{{ Route("filtrageParCategory",$category) }}">{{ $category->name }}</a></li>

                                    @endforeach

                                </ul>
                            </div>
                        </li>
                        <!-- Status Dropdown -->
                        <li>
                            <div class="dropdownn">
                                <button  onclick="hiddeen(event)" class="btn">حالة الأنمي <span class="caret">▼</span></button>
                                <ul id="animeEtat"  class="dropdown-menu hidden">
                                    <li><a href="{{Route("filtrageParEtat", ['status' => 'Pas encore'])}}">Pas encore</a></li>
                                    <li><a href="{{Route("filtrageParEtat", ['status' => 'Complet'])}}">Complet</a></li>
                                    <li><a href="{{Route("filtrageParEtat", ['status' => 'En cours'])}}">En cours</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="alphabetical-filter">
                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="#">A</a></li>
                            <li><a href="#">B</a></li>
                            <li><a href="#">C</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FILTER SECTION -->
    </div>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container" id="container">

            <div class="">
                <div class="trending__product">




                    <div class="row" id="row">
                        @foreach ($animes as $anime )

                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class='product__item'>
                                <div class='product__item__pic set-bg' data-setbg='{{ $anime->PosterLink }}'>
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
                                    <h5><a href='{{ Route("anime-film",["type"=>$anime->type,$anime]) }}'>{{ $anime->titre }}</a></h5>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- ============================== -->
                        <!-- ============================== -->
                        <!-- ============================== -->
                        <!-- ============================== -->
                        <!-- ============================== -->
                    </div><!-- .row -->

                    <!-- ============================== -->
                    <!-- ============================== -->
                    <!-- ============================== -->
                    <!-- ============================== -->
                    <!-- ============================== -->
                </div>



            </div>


        </div>

        </div>


        <div class="product__pagination">
            @for ($i = 1; $i <= $animes->lastPage(); $i++)
                <a href="{{ $animes->url($i) }}" class="{{ $animes->currentPage() == $i ? 'current-page' : '' }}">{{ $i }}</a>
                @endfor

                @if ($animes->currentPage() < $animes->lastPage())
                    <a href="{{ $animes->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a>
                    @endif
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
                        <a href="/index.html"><img loading="lazy" src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="/index.html">Homepage</a></li>
                            <li><a href="/categories.html">Categories</a></li>
                            <li><a href="/blog.html">Our Blog</a></li>
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
      
        // let dropdownMenus = document.querySelectorAll('.dropdown-menu');
        // let animeCategories = document.getElementById('animeCategories');
        // let animeEtat = document.getElementById('animeEtat');
        // let animeSection = document.getElementById('animeSection');

        

        function hiddeen() {
            // console.log(event.target.parentElement.children[1])
            event.target.nextElementSibling.classList.toggle("hidden")
//             if (!test.classList.contains("activve")) {
//   test.classList.add("activve");
// } else {
//   test.classList.remove("activve");
// }
// animeCategories.classList.toggle('hidden')
// animeEtat.classList.toggle('hidden')
// animeSection.classList.toggle('hidden')
            
        };
    </script>
</body>

</html>