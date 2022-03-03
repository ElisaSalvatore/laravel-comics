<?php

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

Route::get('/', function () {
    $data = config("comics");

    return view('homepage', compact("data"));
}); 

Route::get('/characters', function () {
    return view('personaggi');
})->name("characters"); 

Route::get('/comics', function () {
    return view('fumetti');
})->name("comics"); 

Route::get('/movies', function () {
    return view('film');
})->name("movies"); 

Route::get('/tv', function () {
    return view('televisione');
})->name("tv"); 

Route::get('/games', function () {
    return view('giochi');
})->name("games"); 

Route::get('/collectibles', function () {
    return view('collezioni');
})->name("collectibles"); 

Route::get('/video', function () {
    return view('video');
}); 

Route::get('/fans', function () {
    return view('fans');
});

Route::get('/news', function () {
    return view('notizie');
})->name("news");

Route::get('/shop', function () {
    return view('negozio');
})->name("shop");