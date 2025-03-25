<?php

namespace App\Http\Controllers;

use App\Models\anime;
use App\Http\Requests\StoreanimeRequest;
use App\Http\Requests\UpdateanimeRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index (){
    //     $animes=Anime::all();
    //     // dd($request->search);
    // return view("user.index",["animes"=>$animes]);
    // }
    public function home(Request $request)
    {

        if ($request) {
            // $queryString = Input::get('search');

            $serch = $request->search;

            // $animes=anime::search($request->search)->get();
            $animes = anime::where('titre', 'LIKE', "%" . $serch . "%")->paginate(2);
            return view("user.index", ["animes" => $animes]);
        } else {
            $animes = Anime::all();
            $categories = Category::all();
            // dd($request->search);
            return view("user.index", ["animes" => $animes, "categories" => $categories]);
        }
    }

    public function index()
    {
        return view("admin.dashboard");
    }
    public function manageAnimes()
    {
        $animes = Anime::all();
        $categories = Category::all();
        return view("admin.index", ["animes" => $animes, "categories" => $categories]);
    }

    public function test()
    {
        return view("user.test");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $dataValidate = $request->validate([
            "posterLink" => "required",
            "titre" => "required",
            "description" => "required",
            "yearCreation" => "required",
            "yearFin" => "required",
            "trailer" => "required",
            "studio" => "required",
            "thumbnail" => "required",
            "status" => "required",
            "rating" => "required",
            "rank" => "required",
            "score" => "required",
            "categories" => "required|array", // On vérifie que c'est un tableau
            "categories.*" => "exists:categories,id"

        ]);

        $anime = Anime::create($dataValidate);
        // $anime->categories()->sync($request->categories);

        // dd ($request);
        // $anime=anime::create($request->all());
        // $anime->categories()->attach(["category_id"=>$request->genre,"anime_id"=>$anime->id]);
        // $anime=anime::findOrFail();

        //    $anime= anime::create([
        //         "titre"=>$request->titre,
        //         "posterLink"=>$request->posterLink,
        //         "description"=>$request->description,
        //         "yearCreation"=>$request->yearCreation,
        //         "yearFin"=>$request->yearFin,
        //         "trailer"=>$request->trailer,
        //         "studio"=>$request->studio,
        //         "thumbnail"=>$request->thumbnail,
        //         "status"=>$request->status,
        //         "rating"=>$request->rating,
        //         "rank"=>$request->rank,
        //         "score"=>$request->score,

        // ]);
        // dd($request);

        $anime->categories()->sync($request->categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreanimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(anime $anime)
    {
        $categories = Category::all();
        
        return view("admin.anime.edit", ["anime" => $anime,"categories"=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, anime $anime)
    {
        $anime->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anime $anime)
    {
        $anime->delete();
    }
}
