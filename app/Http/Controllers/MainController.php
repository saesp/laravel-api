<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // HOME
    public function home() {
        $movies = Movie::all();
        return view('pages.home', compact('movies'));
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
