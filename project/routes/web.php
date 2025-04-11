<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EpisodeController;
use App\Http\Middleware\AdminMiddlware;
use App\Http\Middleware\AuthMiddleware;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
// ->middleware("auth.api")
Route::get('/', [AnimeController::class, "home"])->name("home");
Route::get('/allAnimes', [AnimeController::class, "index"])->name("index");
Route::get('/dashboard', [AnimeController::class, "dashBoard"])->middleware(AdminMiddlware::class);
Route::get('/contentManagement', [AnimeController::class, "manageAnimes"])->name("contentManagement")->middleware(AdminMiddlware::class);
Route::post('/addAnimes', [AnimeController::class, "store"])->name("addAnime")->middleware(AdminMiddlware::class);

Route::post('/categories', [CategoryController::class, "index"])->name("categorie");


Route::get('{anime}/animeDetails', [AnimeController::class, "animeDetails"])->name("animeDetails");
Route::get('{saison}/animeWatching', [AnimeController::class, "animeWatching"])->name("animeWatching");
Route::get('{episode}/{saison}/episodeWatching', [AnimeController::class, "episodeWatching"])->name("episode");



Route::post('updateAnime/{anime}', [AnimeController::class, "update"])->name("updateAnime")->middleware(AdminMiddlware::class);
Route::get('{anime}/delete', [AnimeController::class, "destroy"])->name("deleteAnime")->middleware(AdminMiddlware::class);
Route::post('/search', [AnimeController::class, "home"])->name("search");

Route::post("/register", [AuthentController::class, "register"])->name("register");
Route::post("/login", [AuthentController::class, "login"])->name("login");
Route::get("/home")->middleware(AuthMiddleware::class);
Route::get("/logOut", [AuthentController::class, "logOut"])->name("logOut");
Route::get("/registerForm", [AuthentController::class, "registerForm"])->name("registerForm");
Route::get("/loginForm", [AuthentController::class, "loginForm"])->name("loginForm");



Route::get('/derniereEpisodes', [AnimeController::class, "derniereEpisodes"])->name("test");
