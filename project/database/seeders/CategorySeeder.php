<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["name"=>"Action"]);
        Category::create(["name"=>"Aventure"]);
        Category::create(["name"=>"Comédie"]);
        Category::create(["name"=>"Drame"]);
        Category::create(["name"=>"Fantasy"]);
        Category::create(["name"=>"Horreur"]);
        Category::create(["name"=>"Romance"]);
        Category::create(["name"=>"Science-fiction"]);
        Category::create(["name"=>"Tranche de vie"]);
    }
}
