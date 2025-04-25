<?php

namespace App\Http\Controllers;

use App\Models\anime;
use App\Http\Requests\StoreanimeRequest;
use App\Http\Requests\UpdateanimeRequest;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Film;
use App\Models\Saison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
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

    public function favoryAnimes()
    {
        $user = Auth::user();
        // $user = Auth::user();
        // $animes = Anime::with('saisons.episodes')->orderByDesc("created_at")->limit(24)->get();
        // $last_anime = Saison::orderBy('updated_at', 'desc')->limit(12)->get();
        // $last_anime = Anime::orderBy('updated_at','desc')->limit(6)->get();
        // $last_anime = Anime::with('saisons')->orderBy('updated_at','desc')->get();
        //    foreach($last_anime as $anime){
        //     if($anime->saisons->isNotEmpty()){

        //         dump(  $anime->saisons()->orderByDesc("created_at")->first()->titre);
        //     }
        // }

        // dd($last_anime);
        $animes = $user->animes()->with("saisons.episodes")->orderByDesc("created_at")->get();
        return view("user.animes.favoryAnimes", ["animes" => $animes]);
    }
    public function addFavoryAnimes(Anime $anime)
    {
        if (Auth::check()) {
            $user = Auth::user();
            foreach ($user->animes as $anim) {
                if ($anim->id == $anime->id) {
                    return redirect()->route("animes");
                }
            }
            $anime->users()->attach(Auth::user()->id, [
                "created_at" => now()
            ]);
            return redirect()->route("animes");
        } else {
            return redirect()->route("loginForm");
        }



        // return redirect()->route("animes");
    }
    public function home()
    {
        //     $saisons = Saison::all();
        //     foreach( $saisons as $saison ) {
        //      echo $saison->episodes()->orderBy("episodeNumber","desc")->first(); //dernier episode pour chaque saison
        // }

        $animes = Anime::with('saisons.episodes')->orderByDesc("created_at")->limit(24)->get();
        $last_anime = Saison::orderBy('updated_at', 'desc')->limit(12)->get();
        // $last_anime = Anime::orderBy('updated_at','desc')->limit(6)->get();
        // $last_anime = Anime::with('saisons')->orderBy('updated_at','desc')->get();
        //    foreach($last_anime as $anime){
        //     if($anime->saisons->isNotEmpty()){

        //         dump(  $anime->saisons()->orderByDesc("created_at")->first()->titre);
        //     }
        // }

        // dd($last_anime);
        $resultats = [];

        $saisons = Saison::with("episodes")->get();

        foreach ($saisons as $saison) {
            $somme = $saison->episodes->sum('counter');

            $resultats[] = [
                'saison' => $saison,
                'somme_counter' => $somme,
            ];
        }
        usort($resultats, function ($a, $b) {
            return $b['somme_counter'] <=> $a['somme_counter'];
        });
        $resultats = array_slice($resultats, 0, 12);

        return view("user.animes.index", ["animes" => $animes, "lastAnimes" => $last_anime, "resultats" => $resultats]);
    }

    public function filtrageParCategory(Category $category)
    {
        if ($category) {
            $categories = Category::all();

            $animes = $category->animes()->paginate(10);
            return view("user.animes.animes", ["animes" => $animes, "categories" => $categories]);
        }
    }
    public function filtrageParEtat($status)
    {
        $categories = Category::all();

        $animes = Anime::where("status", $status)->paginate(10);
        return view("user.animes.animes", ["animes" => $animes, "categories" => $categories]);
    }

    public function animeFilm($anime, $type)
    {
        if ($type === "MOVIE") {
            return redirect()->route("filmDetails", $anime);
        } else {
            return redirect()->route("animeDetails", $anime);
        }
    }
    public function filtrageParType($type)
    {
        $categories = Category::all();
        if ($type === "MOVIE") {
            $animes = Film::paginate(10);
        } else {
            $animes = Anime::where("type", $type)->paginate(10);
        }

        return view("user.animes.animes", ["animes" => $animes, "categories" => $categories]);
    }
    public function index(Request $request)
    {

        if ($request->search != null) {
            // $queryString = Input::get('search');

            $search = $request->search;
            // $last_anime = Anime::orderBy('updated_at','desc')->limit(6)->get();
            // dd($search);
            // $animes=anime::search($request->search)->get();
            $categories = Category::all();

            $animes = anime::with('categories')->where('titre', 'LIKE', '%' . $search . '%')->paginate(10);

            return view("user.animes.animes", ["animes" => $animes, "categories" => $categories]);
        } else if ($request->lettre) {
            $categories = Category::all();

            $animes = anime::with('categories')->where('titre', 'LIKE',  $request->lettre . '%')->paginate(10);

            return view("user.animes.animes", ["animes" => $animes, "categories" => $categories]);
        } else {
            // $animes = Anime::all();
            // $animes = Anime::with('categories')->get();
            // $animes = Anime::with('categories')->paginate(5);
            $animes = Anime::with('categories')->orderBy('yearCreation', 'desc')->paginate(5);

            // "categories" => $categories]
            // $categories=$animes->categories();
            $categories = Category::all();



            return view("user.animes.animes", ["animes" => $animes, "categories" => $categories]);
        }
    }

    public function filtrage() {}
    public function animeDetails(Anime $anime)
    {
        $saisons = $anime->saisons;

        return view("user.animes.animeDetails", ["anime" => $anime, "saisons" => $saisons]);
    }
    public function animeWatching(Saison $saison)
    {
        // $anime->saisons()->get();
        // $saison= Saison::where("anime_id",$anime->id)->get();
        // $saisons=$anime->saisons;

        // {
        //     foreach ($saison->episodes as $episode) {

        //     echo "($episode->episodeNumber)";}
        // };
        // $epsiodes=$saison::with('episodes');
        // $saison=$saison::with("episodes");


        return view("user.animes.animeWatching", ["saison" => $saison]);
    }
    public function episodes(Saison $saison)
    {
        $episodes = $saison->episodes()->paginate(10);
        // dd($episodes);
        return view("user.episodes.episodes", ['episodes' => $episodes, 'saison' => $saison]);
    }
    public function episodeWatching(Episode $episode, Saison $saison)
    {
        // $anime->saisons()->get();
        // $saison= Saison::where("anime_id",$anime->id)->get();
        // $saisons=$anime->saisons;

        // {
        //     foreach ($saison->episodes as $episode) {

        //     echo "($episode->episodeNumber)";}
        // };


        $episodes = $saison->episodes()->orderByDesc('episodeNumber')->get();

        return view("user.animes.animeWatching", ["episode" => $episode, "saison" => $saison, "episodes" => $episodes]);
    }

    public function comments(Request $request, Episode $episode, Saison $saison)
    {
        $episode->users()->attach($request->user()->id, [
            "comment" => $request->comment
        ]);


        return redirect()->route("episode", ["episode" => $episode, "saison" => $saison]);
    }

    public function counter(Episode   $episode, Saison $saison)

    {
        $episode->update(["counter" => number_format($episode->counter + 1)]);

        return redirect()->route("episode", [$episode, $saison]);
    }
    public function plupartAnimes()
    {
        $resultats = [];

        $saisons = Saison::with("episodes")->get();

        foreach ($saisons as $saison) {
            $somme = $saison->episodes->sum('counter');

            $resultats[] = [
                'saison' => $saison,
                'somme_counter' => $somme,
            ];
        }

        usort($resultats, function ($a, $b) {
            return $b['somme_counter'] <=> $a['somme_counter'];
        });

        dd($resultats[1]["saison"]->titre);
        return view("user.animes.index", ["resultats" => $resultats]);
    }

    public function dashBoard()
    {
        return view("admin.dashboard");
    }

    public function manageAnimes()
    {
        $animes = Anime::with('categories')->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::all();
        return view("admin.animes.index", ["animes" => $animes, "categories" => $categories]);
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


        $anime->categories()->attach($request->categories, ["created_at" => now()]);
        // $anime->categories()->sync(array_fill_keys($request->categories, ['created_at' => now()]));
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

        return view("admin.anime.edit", ["anime" => $anime, "categories" => $categories]);
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
