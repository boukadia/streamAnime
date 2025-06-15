<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                            <a class="nav-link text-white" href="{{ Route('manageFilms') }}">
                                <i class="fas fa-tv me-2"></i>
                                Filmes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ Route('episodesManagement') }}">
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
                            <a class="nav-link text-white" href="{{ Route('statistique') }}">
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
                    <h1 class="h2">Statistiques</h1>
                </div>

                <div class="container mt-5">
                    <h1 class="text-center mb-4">Statistiques </h1>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Total d'Animes</h5>
                                    <p class="display-4 fw-bold text-primary">{{ $totalAnimes }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Total d'Utilisateurs</h5>
                                    <p class="display-4 fw-bold text-success">{{ $totalUsers }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Genre Populaire</h5>
                                    <p class="display-4 fw-bold text-warning">{{ $populaireCategorie->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card border-0 shadow-sm text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Total des Vues</h5>
                                    <p class="display-4 fw-bold text-info">{{ $counter }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 mt-4">
                        <div class="col-lg-6">

                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</body>

</html>