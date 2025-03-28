<!-- ===========================ralation entre film et anime n'est pas definie dans database=====================================
=========================== on a cercle dans database entre anime film charactere ===================================== -->
<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();

        return view("user.character", ["characters" => $characters]);
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
            "name" => "required",
            "anime_id" => "required",
            "glance" => "required",
            "photoLink" => "required",

            "thumbnail" => "required", //n'est pas dans database
        ]);
        $character = character::create($dataValidate);
    }

    /**
     * Display the specified resource.
     */
    public function show(character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view("admin.character.edit", ["character", $character]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        $dataValidate = $request->validate([
            "posterLink" => "required", //n'est pas dans database
            "titre" => "required",
            "description" => "required",
            "yearCreation" => "required",
            "yearFin" => "required",

            "trailer" => "required",
            "thumbnail" => "required", //n'est pas dans database

        ]);
        $character->update($dataValidate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
    }
}
