<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    /** @use HasFactory<\Database\Factories\SaisonFactory> */
    use HasFactory;
   protected $fillable = [
        "titre",
        "description",
        "posterLink",
        "status",
        "yearFin",
        "trailer",
        "anime_id",
        "saisonNumber",
        "yearCreation",
        
    ];
    public function animes(){
        return $this->belongsTo(Category::class,"anime_id");
    }
    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
