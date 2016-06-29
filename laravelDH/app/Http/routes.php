<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$peliculas = [
                "Toy Story",
                "Buscando a Nemo",
                "Avatar",
                "Star Wars: Episodio V",
                "UP",
                "Mary and Max"
             ];


Route::get('/', function () {
    return view('welcome');
});


Route::get('/peliculas', function () {
    return view('peliculas');
});

