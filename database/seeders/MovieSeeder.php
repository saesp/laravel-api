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

        Movie::factory()-> count(100)-> make()-> each(function ($p) {
            // 1toM  FK
            // $typology = Typology::inRandomOrder()-> first();
            // $p-> typology()-> associate($typology);

            // NtoM
            $genres = Genre::inRandomOrder()-> limit(rand(1, 3))-> get();
            $p-> genres()-> attach($genres);

            
            $tags = Tag::inRandomOrder()-> limit(rand(2, 4))-> get();
            $p-> tags()-> attach($tags);

            $p-> save();
            
        });
    }
}
