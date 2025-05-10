<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Épisode</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="custom.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Modifier un Épisode</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateEpisode', $episode->id) }}" method="post">
                    @csrf
                     <div class="mb-3">
                                        <label for="episodeNumber" class="form-label">Numéro</label>
                                        <input type="number" class="form-control" id="episodeNumber" name="episodeNumber" value="{{$episode->episodeNumber}}" required>
                                    </div>
                    <div class="mb-3">
                        <label for="episodeTitle" class="form-label">thumbnail</label>
                        <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="{{ $episode->thumbnail }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="episodeTitle" class="form-label">Release Date</label>
                        <input type="text" class="form-control" id="releaseDate" name="releaseDate" value="{{ $episode->releaseDate }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="episodeTitle" class="form-label">videoLink</label>
                        <input type="text" class="form-control" id="videoLink" name="videoLink" value="{{ $episode->videoLink }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="episodeNumber" class="form-label">Duration</label>
                        <input type="time" class="form-control" id="duration" name="duration" value="{{ $episode->duration }}" required>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        <a href="{{ route('episodesManagement') }}" class="btn btn-secondary">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>