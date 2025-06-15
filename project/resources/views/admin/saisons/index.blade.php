<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Animes - Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="custom.css" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
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
                            <a class="nav-link active text-white" href="{{ Route('manageFilms') }}">
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestion des Animes</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnimeModal">
                            <i class="fas fa-plus me-1"></i> Ajouter un saison
                        </button>
                    </div>
                </div>

                <!-- Search and Filter -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row g-3">

                            <form class="col-md-6" action="{{ Route('saisonsManagement') }}" method="get">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" placeholder="Rechercher un anime..." name="search">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary w-100">Filtrer</button>
                                    </div>
                                </div>

                            </form>


                            <div class="col-md-3">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Statut
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('filtrageParEtatSaison', ['status' => 'En cours']) }}">En cours</a></li>
                                        <li><a class="dropdown-item" href="{{ route('filtrageParEtatSaison', ['status' => 'Complet']) }}">Terminé</a></li>
                                        <li><a class="dropdown-item" href="{{ route('filtrageParEtatSaison', ['status' => 'Pas encore']) }}">À venir</a></li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- Anime List -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Liste des saisons</h6>
                       
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="animeTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Episodes</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saisons as $saison )

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="/build/assets/img/anime/{{ $saison->posterLink }}" alt="Anime Cover" class="img-thumbnail" style="width: 100px; height: auto;">
                                        </td>

                                        <td>{{ $saison->titre }}</td>
                                        <td>{{ $saison->episodes->count("id") }}</td>
                                        <td><span class="badge bg-success">{{ $saison->status }}</span></td>

                                        <td>
                                            <a href="{{ Route('editSaison',$saison) }}" class="btn btn-sm btn-primary "><i class="fas fa-edit"></i></a>
                                            <a href="{{ Route('deleteSaison',$saison) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->

                        <div class="product__pagination">
                            @for ($i = 1; $i <= $saisons->lastPage(); $i++)
                                <a href="{{ $saisons->url($i) }}" class="{{ $saisons->currentPage() == $i ? 'current-page' : '' }}">{{ $i }}</a>
                                @endfor

                                @if ($saisons->currentPage() < $saisons->lastPage())
                                    <a href="{{ $saisons->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a>
                                    @endif
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Add Anime Modal -->
    <div class="modal fade" id="addAnimeModal" tabindex="-1" aria-labelledby="addAnimeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAnimeModalLabel">ajouter un Anime</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addSaison') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="animeTitle" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="animeTitle" name="titre" required>
                            </div>

                        </div>

                        <div class="row mb-3">
                           
                           
                            <div class="col-md-4">
                                <label for="animeStatus" class="form-label">Statut</label>
                                <select class="form-select" id="animeStatus" name="status" required>
                                    <option value="En cours">En cours</option>
                                    <option value="Complet">Terminé</option>
                                    <option value="Pas encore">À venir</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="animeStatus" class="form-label">Animes</label>
                                <select class="form-select" id="animeId" name="anime_id" required>
                                 @foreach ($animes as $anime )
                                 
                                 <option value="{{ $anime->id }}">{{ $anime->titre }}</option>
                                 @endforeach
                                 
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="yearCreation">Date de création</label>
                                <input type="date" class="form-control custom-input" id="yearCreation" name="yearCreation">
                            </div>
                            <div class="col-md-4">
                                <label for="yearFin">Date de sortie</label>
                                <input type="date" class="form-control custom-input" id="yearFin" name="yearFin">
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="animeDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="animeDescription" name="description" rows="4"></textarea>
                        </div>

                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <label for="animeBanner" class="form-label">Bannière</label>
                                <input class="form-control" type="file" id="animeBanner" name="posterLink" style="width: 100px;">
                            </div>
                            <div class="col-md-6">
                                <label for="animeBanner" class="form-label">saison number</label>
                                <input class="form-control" type="number" id="animeBanner" name="saisonNumber" min="1" max="12">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="animeTrailer" class="form-label">Lien du trailer (YouTube)</label>
                            <input type="url" class="form-control" id="animeTrailer" name="trailer">
                        </div>
                       
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Ajouter une anime</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================ -->
    <!-- ============================ -->
    <!-- ============================ -->








    <!-- ============================== -->
    <!-- ============================== -->
    <!-- ============================== -->
    <!-- ============================== -->
    <!-- ============================== -->
    <!-- ============================== -->

    <!-- Edit Modal and View Modal would be similar to the Add Modal but pre-filled with data -->

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>