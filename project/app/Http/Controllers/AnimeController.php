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
    public function home() {
    //     $saisons = Saison::all();
    //     foreach( $saisons as $saison ) {
    //      echo $saison->episodes()->orderBy("episodeNumber","desc")->first(); //dernier episode pour chaque saison
    // }

    $animes = Anime::with('saisons.episodes')->orderByDesc("created_at")->limit(24)->get();
    $last_anime = Anime::orderBy('updated_at','desc')->limit(6)->get();

    
    return view("user.index", ["animes" => $animes,"lastAnimes"=> $last_anime]);

   
    

        
    }
    
    public function filtrageParCategory(Category $category){
        if($category){
            $categories = Category::all();
        
            $animes = $category->animes()->paginate(10);
            return view("user.animes", ["animes" => $animes,"categories" => $categories]);
        }
    }
    public function filtrageParEtat($status){
        // dd($status) ;
            $categories = Category::all();
        
            $animes = Anime::where("status",$status)->paginate(10);
            // dd($animes);
            return view("user.animes", ["animes" => $animes,"categories" => $categories]);
        
    }
    public function index(Request $request)
    {

        if ($request->search!=null) {
            // $queryString = Input::get('search');

            $search = $request->search;
            // $last_anime = Anime::orderBy('updated_at','desc')->limit(6)->get();
// dd($search);
            // $animes=anime::search($request->search)->get();
            $categories = Category::all();

            $animes = anime::with('categories')->where('titre', 'LIKE', '%' . $search . '%')->paginate(10);
            
            return view("user.animes", ["animes" => $animes,"categories" => $categories]);
        } else {
            // $animes = Anime::all();
            // $animes = Anime::with('categories')->get();
            // $animes = Anime::with('categories')->paginate(5);
            $animes = Anime::with('categories')->orderBy('yearCreation', 'desc')->paginate(5);

            // "categories" => $categories]
            // $categories=$animes->categories();
            $categories = Category::all();
            
            
           
            return view("user.animes", ["animes" => $animes,"categories" => $categories]);
        }
    }

    public function filtrage(){


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
        // $epsiodes=$saison::with('episodes');
        // $saison=$saison::with("episodes");
        
       
        return view("user.animeWatching", ["saison"=>$saison]);

    }
    public function allEpisodes(Saison $saison){
        $episodes=$saison->episodes()->paginate(5);
        // dd($episodes);
        return view("user.episodes",['episodes'=>$episodes,'saison'=>$saison]);

    }
    public function episodeWatching( Episode $episode,Saison $saison){
        // $anime->saisons()->get();
        // $saison= Saison::where("anime_id",$anime->id)->get();
        // $saisons=$anime->saisons;
        
        // {
        //     foreach ($saison->episodes as $episode) {
          
        //     echo "($episode->episodeNumber)";}
        // };
        $episodes = $saison->episodes()->orderByDesc('episodeNumber')->get();
            
        return view("user.animeWatching", ["episode"=>$episode,"saison"=> $saison,"episodes"=> $episodes]);

    }
    public function dashBoard()
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
