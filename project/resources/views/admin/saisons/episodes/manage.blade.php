<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Épisodes - Admin Dashboard</title>
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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gestion des Épisodes</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEpisodeModal">
                            <i class="fas fa-plus me-1"></i> Ajouter un Épisode
                        </button>
                    </div>
                </div>

                <!-- Episode List -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="episodeTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Saison</th>
                                        <th>Numéro</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($episodes as $episode)
                                    <tr>
                                        <td>{{ $episode->saisons->titre }}</td>
                                        <td>{{ $episode->episodeNumber}}</td>
                                        <td>
                                            <a href="{{ Route('editEpisode', $episode) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <a href="{{ Route('deleteEpisode', $episode) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-4">
                        <div class="product__pagination">
                            @for ($i = 1; $i <= $episodes->lastPage(); $i++)
                                <a href="{{ $episodes->url($i) }}" class="{{ $episodes->currentPage() == $i ? 'current-page' : '' }}">{{ $i }}</a>
                                @endfor

                                @if ($episodes->currentPage() < $episodes->lastPage())
                                    <a href="{{ $episodes->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a>
                                    @endif
                        </div>
                    </ul>
                </nav>

                <!-- Add Episode Modal -->
                <div class="modal fade" id="addEpisodeModal" tabindex="-1" aria-labelledby="addEpisodeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addEpisodeModalLabel">Ajouter un Épisode</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('addEpisode') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="episodeNumber" class="form-label">Numéro</label>
                                        <input type="number" class="form-control" id="episodeNumber" name="episodeNumber" required>
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="episodeTitle" class="form-label">thumbnail</label>
                                        <input type="text" class="form-control" id="thumbnail" name="thumbnail"  required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="episodeTitle" class="form-label">videoLink</label>
                                        <input type="text" class="form-control" id="videoLink" name="videoLink"  required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="episodeNumber" class="form-label">Duration</label>
                                        <input type="time" class="form-control" id="duration" name="duration" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="episodeNumber" class="form-label">Release Date</label>
                                        <input type="date" class="form-control" id="releaseDate" name="releaseDate" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="saisonSelect" class="form-label">Saison</label>
                                        <select class="form-select" id="saisonSelect" name="saison_id" required>
                                            @foreach ($saisons as $saison)
                                            <option value="{{ $saison->id }}">{{ $saison->titre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>