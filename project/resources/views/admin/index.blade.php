<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>
    <style>
        /* Main Form Styling */
.anime-form {
    font-family: 'Poppins', sans-serif;
}

.anime-form-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
    margin-bottom: 30px;
}

.card-header {
    background: linear-gradient(90deg, #4a00e0 0%, #8e2de2 100%);
    border: none;
    padding: 20px;
}

.form-title {
    color: #ffffff;
    font-weight: 600;
    margin: 0;
    text-align: center;
    font-size: 1.5rem;
}

.card-body {
    padding: 30px;
    background-color: #192133;
}

.card-footer {
    background-color: #1a1a2e;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
    padding: 20px;
}

/* Input Styling */
.custom-input, .custom-select {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(122, 86, 223, 0.2);
    border-radius: 8px;
    color: #ffffff;
    padding: 12px 15px;
    transition: all 0.3s ease;
}

.custom-input:focus, .custom-select:focus {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: #7a56df;
    box-shadow: 0 0 0 0.2rem rgba(122, 86, 223, 0.25);
    color: #ffffff;
}

.custom-select {
    height: auto;
    padding-right: 30px;
}

.custom-select[multiple] {
    height: auto;
    min-height: 100px;
}

/* File Upload Styling */
.custom-file-label {
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(122, 86, 223, 0.2);
    color: #ffffff;
    border-radius: 8px;
    padding: 12px 15px;
}

.custom-file-label::after {
    height: 100%;
    background-color: #7a56df;
    border-radius: 0 8px 8px 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-upload-container {
    background-color: rgba(255, 255, 255, 0.02);
    border-radius: 8px;
    padding: 15px;
    margin-bottom: 20px;
}

.divider-text {
    display: inline-block;
    width: 100%;
    text-align: center;
    color: #8e9aaf;
    position: relative;
}

.divider-text::before, .divider-text::after {
    content: "";
    position: absolute;
    top: 50%;
    width: 45%;
    height: 1px;
    background-color: rgba(255, 255, 255, 0.1);
}

.divider-text::before {
    left: 0;
}

.divider-text::after {
    right: 0;
}

/* Helper Text */
.helper-text {
    color: #8e9aaf;
    font-size: 0.75rem;
    margin-top: 5px;
}

/* Button Styling */
.submit-btn {
    background: linear-gradient(90deg, #e53637 0%, #ff5f6d 100%);
    border: none;
    border-radius: 50px;
    padding: 10px 30px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(229, 54, 55, 0.3);
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(229, 54, 55, 0.4);
}

.cancel-btn {
    background-color: transparent;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 50px;
    padding: 10px 30px;
    color: #ffffff;
    margin-left: 10px;
    transition: all 0.3s ease;
}

.cancel-btn:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

/* Label Styling */
label {
    color: #ffffff;
    font-weight: 500;
    margin-bottom: 8px;
    display: block;
}

/* Responsive Adjustments */
@media (max-width: 767.98px) {
    .card-body {
        padding: 20px 15px;
    }
    
    .custom-input, .custom-select, .custom-file-label {
        padding: 10px;
    }
    
    .submit-btn, .cancel-btn {
        width: 100%;
        margin: 5px 0;
    }
}
    </style>
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

    <form action="{{ route('search') }}" method="post">
        @csrf
        <input type="text" name="search" id="">
        <input type="submit" name="" id="">
    </form>
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
                <div class="col-lg-8">
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
                            
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class='product__item'>
                                        <div class='product__item__pic set-bg' data-setbg='{{ $anime->PosterLink }}'style='background-image: url({{  $anime->PosterLink}});'>
                                        <div class='ep'></div>
                                            <div class='comment'><i class='fa fa-comments'></i> 11</div>
                                            <div class='view'><i class='fa fa-eye'></i> 9141</div>
                                        </div>
                                        <div class='product__item__text'>
                                        <ul>
                                                <li>Active</li>
                                                <li>Movie</li>
                                                </ul>
                                                <h5><a href='#'>{{ $anime->titre }}</a></h5>
                                                 <div class=''style = 'display:flex;justify-content:space-around'>
                                                 <a href='' class='edit-anime' data-id='{{ $anime->id }}' data-titre='{{ $anime->titre }}' data-description='{{ $anime->description }}' data-posterLink='{{ $anime->PosterLink }}' data-trailer='{{ $anime->trailer }}' data-studio='{{ $anime->studio }}' data-thumbnail='{{ $anime->thumbnail }}' data-rating='{{ $anime->rating }}' data-score='{{ $anime->score }}' data-rank='{{ $anime->rank }}' data-status='{{ $anime->statut }}' data-yearCreation='{{ $anime->yearCreation }}' data-yearFin='{{ $anime->yearFin }}'>Modifier</a> 
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
                <div class="modal-body" >

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
                       
                           @foreach ($categories as $categorie )
                           
                            <input type="checkbox"  id="categorie" name="categories[]"  value="{{ $categorie->id }}">{{ $categorie->name }}
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
                            <label for="rating">Rating</small></label>
                            <input type="text" class="form-control custom-input" id="rating" name="rating">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="score">Score</small></label>
                            <input type="text" class="form-control custom-input" id="score" name="score">
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
                                <option value="ongoing">En cours</option>
                                <option value="completed">Terminé</option>
                                <option value="upcoming">À venir</option>
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
var titre = this.getAttribute('data-titre');
var description = this.getAttribute('data-description');
var posterLink = this.getAttribute('data-posterLink');
var trailer = this.getAttribute('data-trailer');
var studio = this.getAttribute('data-studio');
var thumbnail = this.getAttribute('data-thumbnail');
var rating = this.getAttribute('data-rating');
var score = this.getAttribute('data-score');
var rank = this.getAttribute('data-rank');
var status = this.getAttribute('data-status');
var yearCreation = this.getAttribute('data-yearcreation');
var yearFin = this.getAttribute('data-yearfin');

                    document.getElementById('titre').value = titre;
                    document.getElementById('description').value = description;
                    document.getElementById('posterLink').value = posterLink;
                    document.getElementById('trailer').value = trailer;
                    document.getElementById('studio').value = studio;
                    document.getElementById('thumbnail').value = thumbnail;
                  
                   console.log(titre);
                   
                   
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