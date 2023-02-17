<?php

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

// create - store
Route::get('/create/movie/', [MainController::class, 'movieCreate'])->name('movie.create');
Route::post('/store/movie/', [MainController::class, 'movieStore'])->name('movie.store');
