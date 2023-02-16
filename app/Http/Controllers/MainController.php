<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
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
    public function delete() {
    }

    // CREATE
    public function create() {
    }

    // EDIT
    public function edit() {
    }
}
