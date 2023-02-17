<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // HOME
    public function home() {
        $genres = Genre::all();
        return view('pages.home', compact('genres'));
    }

    // MOVIE
    // Home
    public function movieHome() {
        $movies = Movie::all();
        return view('pages.movie.home', compact('movies'));
    }


    // SHOW
    public function movieShow(Movie $movie) {
        return view('pages.movieShow', compact('movie'));
    }
    

    // DELETE
    public function movieDelete(Movie $movie) {
        $movie-> tags() -> sync([]);

        $movie-> delete();

        return redirect()-> route('movie.home');
    }


    // CREATE - STORE
    public function movieCreate() {
        $genres = Genre::all();
        $tags = Tag::all();

        return view('pages.movie.create', compact('genres', 'tags'));
    }
    public function movieStore(Request $request)
    {
        $data = $request->all();


        $movie = Movie::make($data);

        // genre
        $genre = Genre::find($data['genre_id']);
        $movie-> genre()-> associate($genre);

        $movie-> save();

        // tags
        $tags = Tag::find($data['tags_id']);
        $movie-> tags()-> sync($tags);


        return redirect()-> route('home');
    }


    // Edit - Update
    public function movieEdit(Movie $movie) {
        $genres = Genre::all();
        $tags = Tag::all();
    
        return view('pages.movie.edit', compact('movie', 'genres', 'tags'));
    }
    public function movieUpdate(Request $request)
    {
        $data = $request->all();
    
    
        $movie = Movie::make($data);
    
        // genre
        $genre = Genre::find($data['genre_id']);
        $movie -> update($data);
        $movie-> genre()-> associate($genre);
    
        $movie-> save();
    
        // tags
        $tags = Tag::find($data['tags_id']);
        $movie-> tags()-> sync($tags);
    
    
        return redirect()-> route('home');
    }
    }
