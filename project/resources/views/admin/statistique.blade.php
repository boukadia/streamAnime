<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Statistiques du Site de Streaming Anime</h1>
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
                        <p class="display-4 fw-bold text-info"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Anime le Plus Regardé</h5>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/100" alt="Anime" class="rounded-circle me-3" style="width: 80px; height: 80px;">
                            <div>
                                <h6 class="mb-0"></h6>
                                <p class="text-muted mb-0"> vues</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</body>

</html>