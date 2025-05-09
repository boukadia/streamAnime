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
                <h5 class="modal-title" id="updateAnimeModalLabel">Modifier un Anime</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateAnime',$anime) }}" method="post" >
                    @csrf
                    <input type="hidden" name="anime_id" id="animeId" value="{{ $anime->id }}">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="animeTitle" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="animeTitle" name="titre" value="{{ $anime->titre }}" required>
                        </div>
                       
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="animeEpisodes" class="form-label">Rank</label>
                            <input type="number" class="form-control" id="animeEpisodes" name="rank" value="{{ $anime->rank }}" min="1">
                        </div>
                        <div class="col-md-4">
                            <label for="animeEpisodes" class="form-label">score</label>
                            <input type="number" class="form-control" id="animeEpisodes" name="score" value="{{ $anime->score }}" min="1">
                        </div>
                        <div class="col-md-4">
                            <label for="animeEpisodes" class="form-label">rating</label>
                            <input type="text" class="form-control" id="animeEpisodes" name="rating" value="{{ $anime->rating }}" min="1">
                        </div>
                        <div class="col-md-4">
                            <label for="animeStatus" class="form-label">Statut</label>
                            <select class="form-select" id="animeStatus" name="status" required>
                                <option value="En cours" {{ $anime->status == 'En cours' ? 'selected' : '' }}>En cours</option>
                                <option value="Complet" {{ $anime->status == 'Complet' ? 'selected' : '' }}>Terminé</option>
                                <option value="Pas encore" {{ $anime->status == 'Pas encore' ? 'selected' : '' }}>À venir</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                        <label for="yearCreation">Date de création</label>
                                                <input type="date" class="form-control custom-input" id="yearCreation" name="yearCreation" value="{{ $anime->yearCreation }}">
                                           </div>
                        <div class="col-md-4">
                        <label for="yearFin">Date de sortie</label>
                                                <input type="date" class="form-control custom-input" id="yearFin" name="yearFin" value="{{ $anime->yearFin }}">
                                           </div>
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
                        <textarea class="form-control" id="animeDescription" name="description" rows="4">{{ $anime->description }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="animeCover" class="form-label">Image de couverture</label>
                            <input class="form-control" type="file" id="animeCover" name="thumbnail">
                            <img src="/build/assets/img/anime/{{ $anime->thumbnail }}" alt="Anime Cover" class="img-thumbnail mt-2" style="width: 100px;">
                        </div>
                        <div class="col-md-6">
                            <label for="animeBanner" class="form-label">Bannière</label>
                            <input class="form-control" type="file" id="animeBanner" name="posterLink">
                            <img src="/build/assets/img/anime/{{ $anime->posterLink }}" alt="Anime Banner" class="img-thumbnail mt-2" style="width: 100px;">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="animeTrailer" class="form-label">Lien du trailer (YouTube)</label>
                        <input type="url" class="form-control" id="animeTrailer" name="trailer" value="{{ $anime->trailer }}">
                    </div>
                    <div class="mb-3">
                        <label for="animeTrailer" class="form-label">studio</label>
                        <input type="text" class="form-control" id="animeTrailer" name="studio" value="{{ $anime->studio }}">
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