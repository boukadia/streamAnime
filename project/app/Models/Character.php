<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
    public function animes(){
        return $this->belongsTo(Anime::class,"anime_id");
    }
    public function films(){
        return $this->belongsToMany(Film::class,"character_film");
    }
}
