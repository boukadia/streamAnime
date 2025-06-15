<!DOCTYPE html>
<html lang="zxx">

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

<div class="row">
      <!-- Sidebar -->
           <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse position-fixed h-100">

                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h3 class="text-white">Admin Panel</h3>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route('dashboard') }}">
                                <i class="fas fa-home me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="">
                                <i class="fas fa-tv me-2"></i>
                                Filmes
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ Route('episodesManagement') }}">
                                <i class="fas fa-video me-2"></i>
                                Épisodes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route('saisonsManagement') }}">
                                <i class="fas fa-calendar-alt me-2"></i>
                                Saisons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">
                                <i class="fas fa-users me-2"></i>
                                Utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route("statistique") }}">
                                <i class="fas fa-chart-bar me-2"></i>
                                Statistiques
                            </a>
                        </li>
                        <li class="nav-item mt-5">
                            <a class="nav-link text-white" href="{{ Route('logOut') }}">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>     <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse position-fixed h-100">

                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h3 class="text-white">Admin Panel</h3>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route('dashboard') }}">
                                <i class="fas fa-home me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="">
                                <i class="fas fa-tv me-2"></i>
                                Filmes
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ Route('episodesManagement') }}">
                                <i class="fas fa-video me-2"></i>
                                Épisodes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route('saisonsManagement') }}">
                                <i class="fas fa-calendar-alt me-2"></i>
                                Saisons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">
                                <i class="fas fa-users me-2"></i>
                                Utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route("statistique") }}">
                                <i class="fas fa-chart-bar me-2"></i>
                                Statistiques
                            </a>
                        </li>
                        <li class="nav-item mt-5">
                            <a class="nav-link text-white" href="{{ Route('logOut') }}">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                Déconnexion
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->

    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->

    <!-- Header End -->

    <!-- Hero Section Begin -->

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
                                    <h4>Animes tendance</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn" onclick="showModal()">Ajouter un anime</a>
                                </div>
                            </div>
                        </div>

                        <div class="row" id="row">
                            @foreach ($animes as $anime )

                            <div class="col-lg-2 col-md-4 col-sm-12">

                                <div class='product__item'>
                                    <div class='product__item__pic set-bg' data-setbg='{{ $anime->PosterLink }}'>
                                        <div class='view'><i class='fa fa-eye'></i> {{ $anime->counter }}</div>
                                    </div>
                                    <div class='product__item__text'>
                                        <ul>
                                            @foreach ($anime->categories as $categorie)
                                            <li>{{ $categorie->name }}</li>

                                            @endforeach

                                        </ul>
                                        <h5><a href='#'>{{ $anime->titre }}</a></h5>
                                        <div class='' style='display:flex;justify-content:space-around'>
                                            <button class='edit-anime' data-id='{{ $anime->id }}' data-titre='{{ $anime->titre }}' data-description='{{ $anime->description }}' data-posterLink='{{ $anime->PosterLink }}' data-trailer='{{ $anime->trailer }}' data-studio='{{ $anime->studio }}' data-thumbnail='{{ $anime->thumbnail }}' data-rating='{{ $anime->rating }}' data-score='{{ $anime->score }}' data-rank='{{ $anime->rank }}' data-status='{{ $anime->statut }}' data-yearCreation='{{ $anime->yearCreation }}' data-yearFin='{{ $anime->yearFin }}'>Modifier</button>
                                            <a href='{{ Route('deleteAnime',$anime) }}'>Supprimer</a>
                                        </div>
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

    <!-- Footer Section End -->

    <!-- Modal d'ajout d'anime -->
    <div class="modal fade" id="addAnimeModal" tabindex="-1" role="dialog" aria-labelledby="addAnimeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-color: #0b0c2a; color: #ffffff;">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAnimeModalLabel">Ajouter un nouvel anime</h5>
                    <button type="button" class="close" aria-label="Close" onclick="hideModal()">
                        <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addAnime') }}" method="POST" class="anime-form">
                        @csrf
                        <div class="card anime-form-card">
                            <div class="card-header">
                                <h3 class="form-title">Ajouter un nouvel anime</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="titre">Titre</label>
                                            <input type="text" class="form-control custom-input" id="titre" name="titre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control custom-input" id="description" name="description" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="genre">Genre</label>
                                            @foreach ($categories as $categorie)
                                            <input type="checkbox" id="categorie" name="categories[]" value="{{ $categorie->id }}">{{ $categorie->name }}
                                            @endforeach
                                            <small class="form-text helper-text">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs genres</small>
                                        </div>
                                    </div>
                                    <!-- Right Column -->
                                    <div class="col-md-6">
                                        <div class="form-group image-upload-container">
                                            <input type="url" class="form-control custom-input mt-2" id="posterLink" name="posterLink" placeholder="URL de l'image...">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="trailer">Trailer</label>
                                                <input type="text" class="form-control custom-input" id="trailer" name="trailer">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="studio">Studio</label>
                                                <input type="text" class="form-control custom-input" id="studio" name="studio">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="thumbnail">Thumbnail</label>
                                                <input type="text" class="form-control custom-input" id="thumbnail" name="thumbnail">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="rating">Rating</label>
                                                <input type="text" class="form-control custom-input" id="rating" name="rating">
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="rank">Note <small>(sur 10)</small></label>
                                                <input type="number" class="form-control custom-input" id="rank" name="rank" min="0" max="10" step="0.1">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="status">Statut</label>
                                                <select class="form-control custom-select" id="status" name="status">
                                                    <option value="En cours">En cours</option>
                                                    <option value="Complet">Complet</option>
                                                    <option value="Pas encore">Pas encore</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="yearCreation">Date de création</label>
                                                <input type="date" class="form-control custom-input" id="yearCreation" name="yearCreation">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="yearFin">Date de sortie</label>
                                                <input type="date" class="form-control custom-input" id="yearFin" name="yearFin">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Ajouter l'anime</button>
                                <button type="button" class="btn btn-secondary cancel-btn" onclick="hideModal()">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch" onclick="hideSearchModel()"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    </div>

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

    <!-- Script pour gérer le formulaire d'ajout et de modification d'anime -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editButtons = document.querySelectorAll('.edit-anime');
            editButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var animeId = this.getAttribute('data-id');
                    // var titre = this.getAttribute('data-titre');
                    var description = this.getAttribute('data-description');
                    var posterLink = this.getAttribute('data-posterLink');
                    var trailer = this.getAttribute('data-trailer');
                    var studio = this.getAttribute('data-studio');
                    // var thumbnail = this.getAttribute('data-thumbnail');
                    // var rating = this.getAttribute('data-rating');
                    // var score = this.getAttribute('data-score');
                    // var rank = this.getAttribute('data-rank');
                    // var status = this.getAttribute('data-status');
                    // var yearCreation = this.getAttribute('data-yearcreation');
                    // var yearFin = this.getAttribute('data-yearfin');

                    console.log(event.target.parentElement);
                    document.getElementById('titre').value = titre;
                    document.getElementById('description').value = description;
                    document.getElementById('posterLink').value = posterLink;
                    document.getElementById('trailer').value = trailer;
                    document.getElementById('studio').value = studio;
                    document.getElementById('thumbnail').value = thumbnail;

                    //    console.log(titre);


                    document.getElementById('rating').value = rating;
                    document.getElementById('score').value = score;
                    document.getElementById('rank').value = rank;
                    document.getElementById('status').value = status;
                    document.getElementById('yearCreation').value = yearCreation;
                    document.getElementById('yearFin').value = yearFin;

                    document.getElementById('addAnimeModalLabel').innerText = 'Modifier l\'anime';
                    document.querySelector('.anime-form').action = '{{ url("updateAnime") }}/' + animeId;
                    document.querySelector('.submit-btn').innerText = 'Modifier l\'anime';

                    document.getElementById('addAnimeModal').classList.add('show');
                    document.getElementById('addAnimeModal').style.display = 'block';
                    document.body.classList.add('modal-open');
                });
            });
        });

        function showModal() {
            document.getElementById('addAnimeModal').classList.add('show');
            document.getElementById('addAnimeModal').style.display = 'block';
            document.body.classList.add('modal-open');
        }

        function hideModal() {
            document.getElementById('addAnimeModal').classList.remove('show');
            document.getElementById('addAnimeModal').style.display = 'none';
            document.body.classList.remove('modal-open');
        }

        function hideSearchModel() {
            document.querySelector('.search-model').classList.remove('show');
        }
    </script>
</body>

</html>