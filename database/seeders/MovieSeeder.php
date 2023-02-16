<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory()-> count(100)-> make()-> each(function ($m) {
            // 1toM  FK
            $genre = Genre::inRandomOrder()-> first();
            $m-> genre()-> associate($genre);

            $m-> save();
            
            // NtoM
            $tags = Tag::inRandomOrder()-> limit(rand(2, 4))-> get();
            $m-> tags()-> attach($tags);
        });
    }
}
