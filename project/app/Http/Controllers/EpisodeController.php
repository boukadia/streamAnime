<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Http\Requests\StoreEpisodeRequest;
use App\Http\Requests\UpdateEpisodeRequest;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $episodes = Episode::all();

        return view("user.episode", ["episodes" => $episodes]);
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
            "episodeNumber" => "required",
            "releaseDate" => "required",
            "saison_id" => "required",
            "videoLink" => "required",
            "duration" => "required",
            "thumbnail" => "required", //n'est pas dans database
        ]);
        $episode = Episode::create($dataValidate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Episode $episode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Episode $episode)
    {
        return view("admin.episode.edit", ["episode", $episode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode)
    {
        $dataValidate = $request->validate([
            "titre" => "required",
            "releaceDate" => "required",
            "thumbnail" => "required", //n'est pas dans database

        ]);
        $episode->update($dataValidate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Episode $episode)
    {
        $episode->delete();
    }

}
