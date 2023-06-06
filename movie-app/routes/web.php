<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// for movies
Route::get('/movies',[MovieController::class, 'index']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/create', [MovieController::class,'create']);
Route::delete('/movies/{movie}',[MovieController::class, 'destroy']);

// for genres
Route::get('/genres',[GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);
Route::get('/genres/create', [GenreController::class, 'create']);
Route::delete('/genres/{genre}',[GenreController::class, 'destroy']);

// for reviews
Route::get('/reviews',[ReviewController::class, 'index']);
Route::post('/reviews',[ReviewController::class, 'store']);
Route::get('/reviews/create',[ReviewController::class, 'create']);
Route::delete('/reviews/{review}',[ReviewController::class, 'destroy']);


// for users















Route::get('/users', function () {
    return view('users/index');
});
