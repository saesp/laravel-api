<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// HOME
Route::get('/', [MainController::class, 'home'])->name('home');

// MOVIE
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


// API
Route::get('/api/v1/movie/all', [ApiController::class, 'movieAll']);

