<?php

namespace App\Http\Controllers;

use App\Models\anime;
use App\Http\Requests\StoreanimeRequest;
use App\Http\Requests\UpdateanimeRequest;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Saison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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

        if ($request->search!=null) {
            // $queryString = Input::get('search');

            $serch = $request->search;

            // $animes=anime::search($request->search)->get();
            $animes = anime::where('titre', 'LIKE', "%" . $serch . "%")->paginate(2);
            return view("user.index", ["animes" => $animes]);
        } else {
            // $animes = Anime::all();
            // $animes = Anime::with('categories')->get();
            $animes = Anime::with('categories')->get();
            // "categories" => $categories]
            // $categories=$animes->categories();
            // $categories = Category::all();
            $last_anime = Anime::orderBy('updated_at','desc')->limit(6)->get();
            
           
            return view("user.index", ["animes" => $animes,"lastAnimes"=> $last_anime]);
        }
    }

    public function animeDetails(Anime $anime){
        $saisons=$anime->saisons;

        return view("user.animeDetails", ["anime"=> $anime,"saisons"=> $saisons]);
    }
    public function animeWatching( Saison $saison){
        // $anime->saisons()->get();
        // $saison= Saison::where("anime_id",$anime->id)->get();
        // $saisons=$anime->saisons;
        
        // {
        //     foreach ($saison->episodes as $episode) {
          
        //     echo "($episode->episodeNumber)";}
        // };
       
        return view("user.animeWatching", ["saison"=>$saison]);

    }
    public function episodeWatching( Episode $episode,Saison $saison){
        // $anime->saisons()->get();
        // $saison= Saison::where("anime_id",$anime->id)->get();
        // $saisons=$anime->saisons;
        
        // {
        //     foreach ($saison->episodes as $episode) {
          
        //     echo "($episode->episodeNumber)";}
        // };
       
        return view("user.animeWatching", ["episode"=>$episode,"saison"=> $saison]);

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

    
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
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
    public function create(StoreanimeRequest $request)
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
