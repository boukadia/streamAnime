<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;
// ->middleware("auth.api")
Route::get('/', [AnimeController::class, "home"]);
Route::get('/dashboard', [AnimeController::class, "index"]);
Route::get('/contentManagement', [AnimeController::class, "manageAnimes"])->name("contentManagement");
Route::post('/addAnimes', [AnimeController::class, "create"])->name("addAnime");
// Route::get('{anime}/edit', [AnimeController::class, "edit"])->name("editAnime");
Route::post('updateAnime/{anime}', [AnimeController::class, "update"])->name("updateAnime");
Route::get('{anime}/delete', [AnimeController::class, "destroy"])->name("deleteAnime");
Route::post('/search', [AnimeController::class, "home"])->name("search");
