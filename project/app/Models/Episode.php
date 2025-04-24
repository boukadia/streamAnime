<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /** @use HasFactory<\Database\Factories\EpisodeFactory> */
    use HasFactory;
    protected $fillable=[ 
        "counter" ,
            "releaseDate",
            "episodeNumber" ,
            "saison_id",
            "thumbnail",
            "videoLink",
            "duration" ,
            "counter"
         ];
    public function saisons(){
        return $this->belongsTo(Saison::class,"saison_id");
    }
    public function users(){
        return $this->belongsToMany(User::class,"episodes_comments","episode_id","user_id")->withPivot("comment","created_at");
    }
}
