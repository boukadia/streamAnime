<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\saison;
use App\Http\Requests\StoresaisonRequest;
use App\Http\Requests\UpdatesaisonRequest;
use App\Models\Anime;
use Illuminate\Http\Request;

class SaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saisons = Saison::all();

        return view("user.saison", ["saisons" => $saisons]);
    }


    public function manageSaison(Request $request)
    {
        $animes=Anime::all();
        if ($request->search != null) {
            $saisons = Saison::where("titre", "like", "%" . $request->search . "%")->with(['animes', 'episodes'])->paginate(10);
        } else {
            $saisons = Saison::with(['animes', 'episodes'])->paginate(10);
        }
        $categories = Category::all();



        return view("admin.saisons.index", ["saisons" => $saisons, "categories" => $categories,"animes"=>$animes]);
    }
    public function filtrageParEtat($status)
    {
        $saisons = Saison::where("status", $status)->with(['animes', 'episodes'])->paginate(10);
        return view("admin.saisons.index", ["saisons" => $saisons]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            
        ]);
        Saison::create($dataValidate);
        return redirect()->route("saisonsManagement");
    }

    /**
     * Display the specified resource.
     */
    public function show(saison $saison)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saison $saison)
    {

        return view("admin.saisons.edit", ["saison"=>$saison]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saison $saison)
    {
        $dataValidate = $request->validate([
            
            "titre" => "required",
            "description" => "required",
            "yearCreation" => "required",
            "yearFin" => "required",
            
            "trailer" => "required",
            "status" => "required"

        ]);
        $saison->update($dataValidate);
        return redirect()->route("saisonsManagement");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saison $saison)
    {
        $saison->delete();
        return redirect()->route("saisonsManagement");
    }
}
