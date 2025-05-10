<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\SaisonController;
use App\Http\Middleware\AdminMiddlware;
use App\Http\Middleware\Authe;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
// ->middleware("auth.api")
Route::get('/', [AnimeController::class, "home"])->name("home");
Route::get('/allAnimes', [AnimeController::class, "index"])->name("animes");
Route::get('{category}/filtragee', [AnimeController::class, "filtrageParCategory"])->name("filtrageParCategory");
Route::get('{category}/filtrage', [AnimeController::class, "filtrageParCategoryAdmin"])->name("filtrageParCategoryAdmin");
Route::get('{category}/movieFiltrage', [FilmController::class, "filtrageParCategory"])->name("filmFiltrageParCategory");
Route::get('{status}/filtrageParEtat', [AnimeController::class, "filtrageParEtat"])->name("filtrageParEtat");
Route::get('{status}/filtrageParEtatSaison', [SaisonController::class, "filtrageParEtat"])->name("filtrageParEtatSaison");
Route::get('{status}/filtrageParEtatAdmin', [AnimeController::class, "filtrageParEtatAdmin"])->name("filtrageParEtatAdmin")->middleware(AdminMiddlware::class);
Route::get('{type}/filtrageParType', [AnimeController::class, "filtrageParType"])->name("filtrageParType");
Route::get('/dashboard', [AnimeController::class, "dashBoard"])->middleware(AdminMiddlware::class)->name("dashboard");
Route::get('/statistique', [AnimeController::class, "statistique"])->middleware(AdminMiddlware::class)->name("statistique");
Route::get('/contentManagement', [AnimeController::class, "manageAnimes"])->name("contentManagement")->middleware(AdminMiddlware::class);
Route::post('/addAnimes', [AnimeController::class, "store"])->name("addAnime")->middleware(AdminMiddlware::class);
Route::post('/addSaisons', [SaisonController::class, "store"])->name("addSaison")->middleware(AdminMiddlware::class);

Route::post('/categories', [CategoryController::class, "index"])->name("categorie");

Route::get('/films', [FilmController::class, "index"])->name("films");
Route::get('{lettre}/animeSearch', [AnimeController::class, "index"])->name("animeSearchByLettre");
Route::get('{lettre}/filmSearch', [FilmController::class, "index"])->name("filmSearchByLettre");
Route::get('{film}/filmWatching', [FilmController::class, "filmWatching"])->name("film");
Route::get('{film:id}/filmDetails', [FilmController::class, "filmDetails"])->name("filmDetails");

Route::get('/episodesManagement', [EpisodeController::class, "episodesManagement"])->name("episodesManagement")->middleware(AdminMiddlware::class);

Route::get('/{anime}/{type}/anime-film', [AnimeController::class, "animeFilm"])->name("anime-film"); //Rediriger selon le type de l'anime : si c’est un film, rediriger vers la page des films, sinon rediriger vers la page des séries. "

Route::get('{anime}/animeDetails', [AnimeController::class, "animeDetails"])->name("animeDetails");
Route::get('{saison}/animeWatching', [AnimeController::class, "animeWatching"])->name("animeWatching");
Route::get('{episode}/{saison}/episodeWatching', [AnimeController::class, "episodeWatching"])->name("episode");
Route::get('/allEpisodes', [EpisodeController::class, "index"])->name("allEpisodes");

Route::get('{saison}/episodes', [AnimeController::class, "episodes"])->name("episodes");


Route::post('updateAnime/{anime}', [AnimeController::class, "update"])->name("updateAnime")->middleware(AdminMiddlware::class);
Route::post('updateSaison/{saison}', [SaisonController::class, "update"])->name("updateSaison")->middleware(AdminMiddlware::class);
Route::get('{anime}/edit', [AnimeController::class, "edit"])->name("editAnime")->middleware(AdminMiddlware::class);
Route::get('{saison}/editt', [SaisonController::class, "edit"])->name("editSaison")->middleware(AdminMiddlware::class);
Route::get('{anime}/delete', [SaisonController::class, "destroy"])->name("deleteAnime")->middleware(AdminMiddlware::class);
Route::get('{saison}/deletee', [SaisonController::class, "destroy"])->name("deleteSaison")->middleware(AdminMiddlware::class);
Route::post('/search', [AnimeController::class, "index"])->name("search");

Route::post("/register", [AuthentController::class, "register"])->name("register");
Route::post("/login", [AuthentController::class, "login"])->name("login");
Route::get("/home")->middleware(AuthMiddleware::class);
Route::get("/logOut", [AuthentController::class, "logOut"])->name("logOut");
Route::get("/registerForm", [AuthentController::class, "registerForm"])->name("registerForm");
Route::get("/loginForm", [AuthentController::class, "loginForm"])->name("loginForm");



Route::get('{episode}/{saison}/counter', [AnimeController::class, "counter"])->name("counter");
Route::get('{film}/counter', [FilmController::class, "counter"])->name("viewCounter");
Route::get('/derniereEpisodes', [AnimeController::class, "derniereEpisodes"])->name("test");
Route::get('/plupartAnimes', [AnimeController::class, "plupartAnimes"])->name("plupartAnimes");
Route::get('/favoryAnimes', [AnimeController::class, "favoryAnimes"])->name("favoryAnimes")->middleware(Authe::class);
Route::get('{anime}/addFavoryAnimes', [AnimeController::class, "addFavoryAnimes"])->name("addFavoryAnimes")->middleware(Authe::class);

Route::post('{episode}/{saison}/addComment', [AnimeController::class, "Comments"])->name("addComment");
Route::post('{film}/addCommentFilm', [FilmController::class, "filmComments"])->name("addCommentFilm");
Route::get('/saisonsManagement',[SaisonController::class,"manageSaison"])->name("saisonsManagement")->middleware(AdminMiddlware::class);

Route::get('{episode}/editEpisode', [EpisodeController::class, "edit"])->name("editEpisode")->middleware(AdminMiddlware::class);
Route::post('{episode}/updateEpisode', [EpisodeController::class, "update"])->name("updateEpisode")->middleware(AdminMiddlware::class);
Route::get('{episode}/deleteEpisode', [EpisodeController::class, "destroy"])->name("deleteEpisode")->middleware(AdminMiddlware::class);
Route::post('/addEpisode', [EpisodeController::class, "store"])->name("addEpisode")->middleware(AdminMiddlware::class);




Route::get('/manageFilms', [FilmController::class, "manageFilms"])->name("manageFilms")->middleware(AdminMiddlware::class);
Route::get('{film}/editFilm', [FilmController::class, "edit"])->name("editFilm")->middleware(AdminMiddlware::class);
Route::post('{film}/updateFilm', [FilmController::class, "update"])->name("updateFilm")->middleware(AdminMiddlware::class);
Route::get('{film}/deleteFilm', [FilmController::class, "destroy"])->name("deleteFilm")->middleware(AdminMiddlware::class);
Route::post('/addFilm', [FilmController::class, "store"])->name("addFilm")->middleware(AdminMiddlware::class);