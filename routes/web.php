<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// -------------- WEB
// Home/Index
Route::get('/', [MainController::class, 'home'])->name('home');

// Movie
// home
Route::get('/home/movies/', [MainController::class, 'movieHome'])->name('movie.home');

// delete
Route::get('/delete/movie/{movie}', [MainController::class, 'movieDelete'])->name('movie.delete');

// create - store
Route::get('/create/movie/', [MainController::class, 'movieCreate'])->name('movie.create');
Route::post('/store/movie/', [MainController::class, 'movieStore'])->name('movie.store');

// edit - update
Route::get('/edit/movie/{movie}', [MainController::class, 'movieEdit'])->name('movie.edit');
Route::post('/update/movie/', [MainController::class, 'movieUpdate'])->name('movie.update');


// -------------- API
Route::get('/api/v1/movies/all', [ApiController::class, 'moviesAll']);


