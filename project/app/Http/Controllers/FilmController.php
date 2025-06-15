<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->lettre == null) {
            // $films = Film::all();
            // $films = Film::with('categories')->orderBy('releaseDate', 'desc')->paginate(5);

            // return view("user.films", ["films" => $films]);
            // $film=Film::with('categories')->get();
            $categories = Category::all();

            $films = Film::with('categories')->orderBy('releaseDate', 'desc')->paginate(5);
            return view("user.films.films", ["films" => $films, "categories" => $categories]);
        } else {
            $categories = Category::all();

            $films = Film::with('categories')->where('titre', 'LIKE',   $request->lettre . '%')->orderBy('releaseDate', 'desc')->paginate(5);
            return view("user.films.films", ["films" => $films, "categories" => $categories]);
        }
    }


    public function filmComments(Request $request, Film $film)
    {
        $user = Auth::user();
        $film->users()->attach($user->id, ["comment" => $request->comment, "created_at" => now()]);
        //    $comment= $filmm->users->pivot("comment");
        //    dd($comment);
        // $filmm=Film::where("id",1)->get();
        // echo $filmm;
        // $comments=$film->users->pivot->comment;
        return redirect()->route("film", ["film" => $film]);

        // return redirect()->route("episode", ["episode" => $episode]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function filtrageParCategory(Category $category)
    {
        $categories = Category::all();

        $films = $category->filmes()->paginate(10);
        return view("user.films.films", ["films" => $films, "categories" => $categories]);
    }

    public function filmDetails(Film $film)
    {


        return view("user.films.filmDetails", ["film" => $film]);
    }

    public function filmWatching(Film $film)
    {
        // $saisons=$film->saisons;

        return view("user.films.filmWatching", ["film" => $film]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $dataValidate = $request->validate([
        //     "titre" => "required",
        //     "description" => "required",
        //     "posterLink" => "required",


        //     "trailer" => "required",
        //     "anime_id" => "required",

        //     "releaseDate" => "required",
        //     "duration" => "required",
        //     "videoLink" => "required",
        //     "thumbnail" => "required",
           

        // ]);
    
        $saison = Film::create($request->all());
        $saison->categories()->attach($request->categories, ["created_at" => now()]);
        return redirect()->route("manageFilms");
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
        $categories = Category::all();
        return view("admin.films.edit", ["film"=>$film, "categories" => $categories]);
    }
    public function manageFilms()

    {
        $animes = Anime::all();
        $categories = Category::all();
        $films = Film::with('categories')->orderBy('titre', 'desc')->paginate(10);

        return view("admin.films.manage", ["films" => $films, "categories" => $categories, "animes" => $animes]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        // $dataValidate = $request->validate([
        //    "titre" => "required",
        //     "description" => "required",
        //     "posterLink" => "required",


        //     "trailer" => "required",
           
        

        //     "releaseDate" => "required",
        //     "duration" => "required",
        //     "videoLink" => "required",
        //     "thumbnail" => "required",

        // ]);
        $film->update($request->all());
        $film->categories()->sync($request->categories);
        return redirect()->route("manageFilms");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route("manageFilms");

    }
    public function counter(Film $film)
    {
        $film->increment('counter');
        return redirect()->route("filmDetails", ["film" => $film]);
    }
}
