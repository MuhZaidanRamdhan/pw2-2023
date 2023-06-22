<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
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

// landing page
Route::get('/',[HomeController::class, 'index']);

// Authentication
Route::get('/register', [AuthController::class, 'showRegistrationForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// dasboard admin
Route::get('/dasboard', function () {
    return view('dasboard/index');
});

// for movies
Route::group(['middleware' => 'auth'], function(){
    Route::resource('/movies', MovieController::class);
});

// Route::get('/movies',[MovieController::class, 'index']);
// Route::post('/movies', [MovieController::class, 'store']);
// Route::get('/movies/create', [MovieController::class,'create']);
// Route::delete('/movies/{movie}',[MovieController::class, 'destroy']);
// Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']);
// Route::put('/movies/{movie}', [MovieController::class, 'update']);

// for genres
Route::resource('/genres', GenreController::class);

// Route::get('/genres',[GenreController::class, 'index']);
// Route::post('/genres', [GenreController::class, 'store']);
// Route::get('/genres/create', [GenreController::class, 'create']);
// Route::delete('/genres/{genre}',[GenreController::class, 'destroy']);
// Route::get('/genres/{genre}/edit',[GenreController::class, 'edit']);
// Route::put('/genres/{genre}', [GenreController::class, 'update']);

// for reviews
Route::resource('/reviews', ReviewController::class);

// Route::get('/reviews',[ReviewController::class, 'index']);
// Route::post('/reviews',[ReviewController::class, 'store']);
// Route::get('/reviews/create',[ReviewController::class, 'create']);
// Route::delete('/reviews/{review}',[ReviewController::class, 'destroy']);
// Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit']);
// Route::put('/reviews/{review}', [ReviewController::class, 'update']);


// for users
Route::get('/users', function () {
    return view('users/index');
});
