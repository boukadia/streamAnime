<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $fillable=['name'];
    public function animes(){
        return $this->belongsToMany(Anime::class,"anime_category");
    }

    public function filmes(){
        return $this->belongsToMany(Film::class,"categories_film","category_id","film_id");
    }
}
