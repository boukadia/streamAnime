<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    /** @use HasFactory<\Database\Factories\AnimeFactory> */
    use HasFactory;
    protected $fillable=[ 
        "posterLink" ,
            "titre",
            "description" ,
            "yearCreation",
            "yearFin",
            "trailer",
            "studio" ,
            "thumbnail",
            "status" ,
            "rating",
            "rank" ,
            "score"
         ];
    
    public function characters(){
        return $this->hasMany(Character::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class,"anime_category");
    }
    public function saisons(){
        return $this->hasMany(Saison::class);
    }
}
