<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /** @use HasFactory<\Database\Factories\FilmFactory> */
    use HasFactory;

    public function character(){
        return $this->belongsToMany(Character::class,"character_film");
    }
    public function categories()
{
    return $this->belongsToMany(Category::class,"categories_film","film_id","category_id");
}
}
