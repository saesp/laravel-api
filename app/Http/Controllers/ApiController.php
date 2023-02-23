<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // public function movieAll(){

    //     $movies = Movie::all();

    //     return response()-> json([
    //         "success" => true,
    //         "response" => $movies   
    //     ]);
    // }

    public function moviesAll(){

        $movies = Movie::all();
        $genres = Genre::all();
        $tags = Tag::all();

        return response()-> json([
            "success" => true,
            "response" => [
                'movies' => $movies,
                'genres' => $genres,
                'tags' => $tags,
            ]   
        ]);
    } 
}



















