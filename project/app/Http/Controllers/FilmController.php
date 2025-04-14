<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $films = Film::all();
        // $films = Film::with('categories')->orderBy('releaseDate', 'desc')->paginate(5);

        // return view("user.films", ["films" => $films]);
        // $film=Film::with('categories')->get();
        $films=Film::with('categories')->orderBy('releaseDate','desc')->paginate(5);
        return view("user.films",["films"=>$films]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function filmDetails(Film $film){
       

        return view("user.filmDetails", ["film"=>$film]);
    }

    public function filmWatching(Film $film){
        // $saisons=$film->saisons;

        return view("user.filmWatching", ["film"=>$film]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataValidate = $request->validate([
            "posterLink" => "required",
            "titre" => "required",
            "description" => "required",
            "yearCreation" => "required",
            "yearFin" => "required",
            "saisonNumber" => "required",
            "trailer" => "required",
            "anime_id" => "required", //select njib tous les animes inkhtar lId
            "thumbnail" => "required", //n'est pas dans database
            "status" => "required", //n'est pas dans database
        ]);
        $saison = Film::create($dataValidate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return view("admin.film.edit", ["film", $film]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $dataValidate = $request->validate([
            "posterLink" => "required",//n'est pas dans database
            "titre" => "required",
            "description" => "required",
            "yearCreation" => "required",
            "yearFin" => "required",
            
            "trailer" => "required",
            "thumbnail" => "required", //n'est pas dans database

        ]);
        $film->update($dataValidate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
    }
}
