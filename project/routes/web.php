<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AnimeController::class,"index"]);
Route::post('/search', [AnimeController::class,"index"])->name("search");
