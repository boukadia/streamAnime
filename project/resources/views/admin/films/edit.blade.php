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
                <form action="{{ route('updateFilm',$film) }}" method="post" >
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="animeTitle" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="filmTitle" value="{{ $film->titre }}" name="titre"  required>
                        </div>
                       
                    </div>

                    <div class="row mb-3">
                        
                        <div class="col-md-4">
                        <label for="yearCreation">Release Date</label>
                                                <input type="date" class="form-control custom-input" id="yearCreation" value="{{ $film->releaseDate }}" name="releaseDate" >
                                           </div>
                                            <div class="col-md-4">
                                        <label for="filmNumber" class="form-label">Duration</label>
                                        <input type="number" class="form-control" id="duration" value="{{ $film->duration }}" name="duration" required>
                                    </div>
                       
                    </div>

                   
                    <div class="mb-3">
                    <label for="genre">Genre</label>
                                            @foreach ($categories as $categorie)
                                            <input type="checkbox" id="categorie" name="categories[]" value="{{ $categorie->id }}">{{ $categorie->name }}
                                            @endforeach
                                            
                                       
                        
                    </div>

                    <div class="mb-3">
                        <label for="animeDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="animeDescription"  name="description" rows="4">{{ $film->description }}</textarea>
                    </div>

                   

                    <div class="mb-3">
                        <label for="animeTrailer" class="form-label">Lien du trailer (YouTube)</label>
                        <input type="url" class="form-control" id="animeTrailer" value="{{ $film->trailer }}" name="trailer" >
                    </div>
                    <div class="mb-3">
                        <label for="animeTrailer" class="form-label">Video Link</label>
                        <input type="text" class="form-control" id="videoLink" value="{{ $film->videoLink }}" name="videoLink" >
                    </div>
                    
                     <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Ajouter une anime</button>
            </div>
            </div>
           
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>