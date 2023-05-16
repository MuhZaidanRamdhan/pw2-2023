<?php

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
Route::get('/movies', function () {
    return view('movies/index');
});
Route::get('/genres', function () {
    return view('genres/index');
});
Route::get('/reviews', function () {
    return view('reviews/index');
});
Route::get('/users', function () {
    return view('users/index');
});
