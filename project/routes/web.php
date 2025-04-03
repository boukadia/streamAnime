<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AuthentController;
use App\Http\Middleware\AdminMiddlware;
use Illuminate\Support\Facades\Route;
// ->middleware("auth.api")
Route::get('/', [AnimeController::class, "home"])->name("home");
Route::get('/dashboard', [AnimeController::class, "index"])->middleware(AdminMiddlware::class);
Route::get('/contentManagement', [AnimeController::class, "manageAnimes"])->name("contentManagement");
Route::post('/addAnimes', [AnimeController::class, "store"])->name("addAnime");
// Route::get('{anime}/edit', [AnimeController::class, "edit"])->name("editAnime");
Route::post('updateAnime/{anime}', [AnimeController::class, "update"])->name("updateAnime");
Route::get('{anime}/delete', [AnimeController::class, "destroy"])->name("deleteAnime");
Route::post('/search', [AnimeController::class, "home"])->name("search");

Route::post("/register",[AuthentController::class,"register"])->name("register");
Route::post("/login",[AuthentController::class,"login"])->name("login");
Route::get("/logOut",[AuthentController::class,"logOut"])->name("logOut");
Route::get("/registerForm",[AuthentController::class,"form"])->name("registerForm");
