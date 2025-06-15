<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Films - Admin Dashboard</title>
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
                    <h1 class="h2">Gestion des Films</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnimeModal">
                            <i class="fas fa-plus me-1"></i> Ajouter un Film
                        </button>
                    </div>
                </div>

                <!-- Film List -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="filmTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Genre</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($films as $film)
                                    <tr>
                                        <td>{{ $film->titre }}</td>
                                        <td>
                                            @foreach ($film->categories as $category)
                                            <span>{{ $category->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="{{ Route('editFilm', $film) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ Route('deleteFilm', $film) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mt-4">
                                <div class="product__pagination">
                                    @for ($i = 1; $i <= $films->lastPage(); $i++)
                                        <a href="{{ $films->url($i) }}" class="{{ $films->currentPage() == $i ? 'current-page' : '' }}">{{ $i }}</a>
                                        @endfor

                                        @if ($films->currentPage() < $films->lastPage())
                                            <a href="{{ $films->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a>
                                            @endif
                                </div>
                            </ul>
                        </nav>
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
                    <form action="{{ route('addFilm') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="animeTitle" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="filmTitle" name="titre" required>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label for="yearCreation">Release Date</label>
                                <input type="date" class="form-control custom-input" id="yearCreation" name="releaseDate">
                            </div>
                            <div class="col-md-4">
                                <label for="episodeNumber" class="form-label">Duration</label>
                                <input type="number" class="form-control" id="duration" name="duration" required>
                            </div>

                        </div>

                        <div class="mb-3">
                            <label for="animeStatus" class="form-label">Animes</label>
                            <select class="form-select" id="animeId" name="anime_id" required>
                                @foreach ($animes as $anime )

                                <option value="{{ $anime->id }}">{{ $anime->titre }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="genre">Genre</label>
                            @foreach ($categories as $categorie)
                            <input type="checkbox" id="categorie" name="categories[]" value="{{ $categorie->id }}">{{ $categorie->name }}
                            @endforeach
                            <small class="form-text helper-text">Maintenez la touche Ctrl (ou Cmd) pour sélectionner plusieurs genres</small>


                        </div>

                        <div class="mb-3">
                            <label for="animeDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="animeDescription" name="description" rows="4"></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="animeCover" class="form-label">Image de couverture</label>
                                <input class="form-control" type="file" id="animeCover" name="thumbnail" style="width: 100px;">
                            </div>
                            <div class="col-md-6">
                                <label for="animeBanner" class="form-label">Bannière</label>
                                <input class="form-control" type="file" id="animeBanner" name="posterLink" style="width: 100px;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="animeTrailer" class="form-label">Lien du trailer (YouTube)</label>
                            <input type="url" class="form-control" id="animeTrailer" name="trailer">
                        </div>
                        <div class="mb-3">
                            <label for="animeTrailer" class="form-label">Video Link</label>
                            <input type="text" class="form-control" id="videoLink" name="videoLink">
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

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>