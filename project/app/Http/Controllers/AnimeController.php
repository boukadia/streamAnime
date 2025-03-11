<?php

namespace App\Http\Controllers;

use App\Models\anime;
use App\Http\Requests\StoreanimeRequest;
use App\Http\Requests\UpdateanimeRequest;
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
    public function index(Request $request)
    {
        
        if($request){
            // $queryString = Input::get('search');
            
            $serch=$request->search;
            
            // $animes=anime::search($request->search)->get();
            $animes=anime::where('titre', 'LIKE', "%".$serch."%")->paginate(2);
            return view("user.index",["animes"=>$animes]);
            
            
        }
        else{
            $animes=Anime::all();
            // dd($request->search);
        return view("user.index",["animes"=>$animes]);
        }
        
    }

    public function test(){

        return view("user.test");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateanimeRequest $request, anime $anime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(anime $anime)
    {
        //
    }
}
