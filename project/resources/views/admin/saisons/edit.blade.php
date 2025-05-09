<!DOCTYPE html>
<html lang="en">

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

    <!-- Update Anime Modal -->
    <div class="modal fade show" style="display:block" id="updateAnimeModal" tabindex="-1" aria-labelledby="updateAnimeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAnimeModalLabel">Modifier une saison</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updateSaison',$saison) }}" method="post" >
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="animeTitle" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="animeTitle" name="titre" value="{{ $saison->titre }}" required>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-md-4">
                                <label for="animeStatus" class="form-label">Statut</label>
                                <select class="form-select" id="animeStatus" name="status" required>
                                    <option value="En cours" {{ $saison->status == 'En cours' ? 'selected' : '' }}>En cours</option>
                                    <option value="Complet" {{ $saison->status == 'Complet' ? 'selected' : '' }}>Terminé</option>
                                    <option value="Pas encore" {{ $saison->status == 'Pas encore' ? 'selected' : '' }}>À venir</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="yearCreation">Date de création</label>
                                <input type="date" class="form-control custom-input" id="yearCreation" name="yearCreation" value="{{ $saison->yearCreation }}">
                            </div>
                            <div class="col-md-4">
                                <label for="yearFin">Date de sortie</label>
                                <input type="date" class="form-control custom-input" id="yearFin" name="yearFin" value="{{ $saison->yearFin }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="animeDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="animeDescription" name="description" rows="4">{{ $saison->description }}</textarea>
                        </div>

                       

                        <div class="mb-3">
                            <label for="animeTrailer" class="form-label">Lien du trailer (YouTube)</label>
                            <input type="url" class="form-control" id="animeTrailer" name="trailer" value="{{ $saison->trailer }}">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>