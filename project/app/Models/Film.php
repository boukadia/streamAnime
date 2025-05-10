<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /** @use HasFactory<\Database\Factories\FilmFactory> */
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
        "releaseDate",
        "duration",
        "videoLink",
        "thumbnail",
        "counter"   ,
    ];
    

    public function character(){
        return $this->belongsToMany(Character::class,"character_film");
    }
    public function categories()
{
    return $this->belongsToMany(Category::class,"categories_film","film_id","category_id");
}
public function users()
{
    return $this->belongsToMany(User::class,"films_comments","film_id","user_id")->withPivot("comment","created_at");
}
}
