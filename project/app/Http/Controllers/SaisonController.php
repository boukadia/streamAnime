<?php

namespace App\Http\Controllers;

use App\Models\saison;
use App\Http\Requests\StoresaisonRequest;
use App\Http\Requests\UpdatesaisonRequest;
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
            "thumbnail" => "required", //n'est pas dans database
            "status" => "required", //n'est pas dans database
        ]);
        $saison = Saison::create($dataValidate);
    }

    /**
     * Display the specified resource.
     */
    public function show(saison $saison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(saison $saison)
    {
        return view("admin.saison.edit", ["saison", $saison]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, saison $saison)
    {
        $dataValidate = $request->validate([
            "posterLink" => "required",
            "titre" => "required",
            "description" => "required",
            "yearCreation" => "required",
            "yearFin" => "required",
            "saisonNumber" => "required",
            "trailer" => "required",
            "thumbnail" => "required", //n'est pas dans database
            "status" => "required"

        ]);
        $saison->update($dataValidate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(saison $saison)
    {
        $saison->delete();
    }
}
